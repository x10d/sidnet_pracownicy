<?php defined('SYSPATH') or die('No direct access allowed!');

if (Kohana::$config->load('database.default.connection.database') != 'sidnet_kohana_unitTestingBase') {
    die('

        Wrong database error: change database to sidnet_kohana_unitTestingBase!

        
');
}


class FakePagination
{
    public $items_per_page = 5;
    public $offset = 0;
}

class userTest extends Kohana_Unittest_TestCase
{
    public function testGetEmptyUserList() {
        $modelPracownicy = new Model_Pracownicy();
        $pagination = new FakePagination();
        $pracownicy = $modelPracownicy->getList($pagination);
        $this->assertEmpty($pracownicy);
    }

    public function testCreateTestUser() {
        $modelPracownicy = new Model_Pracownicy();

        $page_data = array(
            'imie' => 'testowy',
            'nazwisko' => 'tester',
            'stanowisko' => 'testingUnit',
            'pesel' => '78042402872',
            'rate_per_hour' => 5
        );

        $result = $modelPracownicy->add($page_data);
        $this->assertEquals($result, array(0 => 1, 1 => 1));
    }

    public function testCreateTheSameTestUser() {
        $modelPracownicy = new Model_Pracownicy();

        $page_data = array(
            'imie' => 'testowy',
            'nazwisko' => 'tester',
            'stanowisko' => 'testingUnit',
            'pesel' => '78042402872',
            'rate_per_hour' => 5
        );

        $is_success = 'false';
        try {
            $modelPracownicy->add($page_data);
        }
        catch(Database_Exception $e) {
            if ($e->getCode() == 1062) {
                $is_success = true;
            }
        }
        $this->assertTrue($is_success);
    }

    public function testGetUserList() {
        $modelPracownicy = new Model_Pracownicy();
        $pagination = new FakePagination();
        $pracownicy = $modelPracownicy->getList($pagination);
        $this->assertNotEmpty($pracownicy);
    }

    public function testWorkingHoursSum() {
        $worker_id = 1;
        $modelPracownicy = new Model_Pracownicy();
        $worker = $modelPracownicy->get($worker_id);

        $modelWorkingHours = new Model_WorkingHours();
        $worker['monthlyEarningValue'] = 0;
        $monthlyEarning = $modelWorkingHours->getMonthlyEarning($worker_id);
        if ($monthlyEarning) {
            foreach ($monthlyEarning as $value) {
                $worker['monthlyEarningValue'] += $value['hours'];
            }
        }
        $this->assertEquals($worker['monthlyEarningValue'], 0);
    }

    public function testIfCheckingOverWorkingHours() {
        $worker_id = 1;
        $modelPracownicy = new Model_Pracownicy();
        $pracownicy = $modelPracownicy->get($worker_id);

        $post = array(
            'worker_id' => 1,
            'date' => strtotime(date('Y-m-d')),
            'hours' => '25'
        );

        $validate = new Validation($post);

        $is_success = false;

        $validate->rule('worker_id', 'not_empty') 
            ->rule('worker_id', 'numeric')
            ->rule('date', 'not_empty')
            ->rule('date', 'date')
            ->rule('hours', 'not_empty')
            ->rule('hours', 'numeric');

        if ($validate->check()) {
            $is_success = true;
        }
        $this->assertFalse($is_success);
    }

    public function testIfCheckingProperWorkingHours() {
        $worker_id = 1;
        $modelPracownicy = new Model_Pracownicy();
        $pracownicy = $modelPracownicy->get($worker_id);

        $post = array(
            'worker_id' => 1,
            'date' => strtotime(date('Y-m-d')),
            'hours' => '4'
        );

        $validate = new Validation($post);

        $is_success = false;

        $validate->rule('worker_id', 'not_empty') 
            ->rule('worker_id', 'numeric')
            ->rule('date', 'not_empty')
            ->rule('date', 'date')
            ->rule('hours', 'not_empty')
            ->rule('hours', 'numeric');

        if ($validate->check()) {
            $is_success = true;
        }
        $this->assertFalse($is_success);
    }

    public function testIfAddProperWorkingHours() {
        $worker_id = 1;
        $modelPracownicy = new Model_Pracownicy();
        $pracownicy = $modelPracownicy->get($worker_id);

        $post = array(
            'worker_id' => 1,
            'date' => strtotime(date('Y-m-d')),
            'hours' => '4'
        );

        $modelWorkingHours = new Model_WorkingHours();
        $is_success = true;
        try {
            $modelWorkingHours->add($post);
        }
        catch(Database_Exception $e) {
            $is_success = false;
        }

        $this->assertTrue($is_success);
    }

    public function testIfAddNextProperWorkingHours() {
        $worker_id = 1;
        $modelPracownicy = new Model_Pracownicy();
        $pracownicy = $modelPracownicy->get($worker_id);

        $post = array(
            'worker_id' => 1,
            'date' => strtotime(date('Y-m-d')),
            'hours' => '6'
        );

        $modelWorkingHours = new Model_WorkingHours();
        $is_success = true;
        try {
            $modelWorkingHours->add($post);
        }
        catch(Database_Exception $e) {
            $is_success = false;
        }

        $this->assertTrue($is_success);
    }

    public function testSumOfWorkingHours() {
        $worker_id = 1;
        $modelPracownicy = new Model_Pracownicy();
        $worker = $modelPracownicy->get($worker_id);

        $modelWorkingHours = new Model_WorkingHours();
        $worker['monthlyEarningValue'] = 0;
        $monthlyEarning = $modelWorkingHours->getMonthlyEarning($worker_id);
        if ($monthlyEarning) {
            foreach ($monthlyEarning as $value) {
                $worker['monthlyEarningValue'] += $value['hours'];
            }
        }
        $this->assertEquals($worker['monthlyEarningValue'], 10);
    }

    public function testIfCheckingInvalidWorkingHours() {
        $worker_id = 1;
        $modelPracownicy = new Model_Pracownicy();
        $pracownicy = $modelPracownicy->get($worker_id);

        $post = array(
            'worker_id' => 1,
            'date' => strtotime(date('Y-m-d')),
            'hours' => '-1'
        );

        $validate = new Validation($post);

        $is_success = false;

        $validate->rule('worker_id', 'not_empty') 
            ->rule('worker_id', 'numeric')
            ->rule('date', 'not_empty')
            ->rule('date', 'date')
            ->rule('hours', 'not_empty')
            ->rule('hours', 'numeric');

        if ($validate->check()) {
            $is_success = true;
        }
        $this->assertFalse($is_success);
    }


/**
    Testy usuwające dane z bazy testowej
*/


    public function testRemoveAllHours() {
        $result = DB::delete('working_hours')
            ->execute();
        $this->assertNotEquals($result, 0);
    }

    public function testRemoveAllWorkers() {
        $result = DB::delete('pracownicy')
            ->execute();
        $this->assertEquals($result, 1);
    }

    public function testSetAutoincrementWorkersToOne() {
        $clear = DB::query(Database::INSERT, 'ALTER TABLE pracownicy AUTO_INCREMENT = 1')
            ->execute();
        $this->assertEquals($clear, array(0 => 0, 1 => 0));
    }
}
