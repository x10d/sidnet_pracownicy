<?php defined('SYSPATH') or die('No direct access allowed!');
 
class MyTest extends Kohana_Unittest_TestCase
{
    public function testAction_monthlyEarning() {
        

        $worker_id = 10;
        $modelPracownicy = new Model_Pracownicy();
        $pracownicy = $modelPracownicy->get($worker_id);

        $pracownicy['monthlyEarningValue'] = 0;
        $modelWorkingHours = new Model_WorkingHours();
        $monthlyEarning = $modelWorkingHours->getMonthlyEarning($worker_id);
        if ($monthlyEarning) {
            foreach ($monthlyEarning as $value) {
                $pracownicy['monthlyEarningValue'] += $value['hours'];
            }
        }
        $this->assertEquals($pracownicy['monthlyEarningValue'], 7);
    }
}
