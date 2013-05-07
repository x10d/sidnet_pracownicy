<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pracownicy extends Controller_Members
{
    public function before() {
        parent::before();
    }

    public function action_index() {
        $modelPracownicy = new Model_Pracownicy();

        $pagination = Pagination::factory(array(
            'items_per_page' => 5,
        ));

        // dummy value
        $total = $pagination->total_items = 1000;

        $options = array(
            'limit' => $pagination->items_per_page,
            'offset' => $pagination->offset
        );

        $pracownicy = $modelPracownicy->getListCalc($options, $total);
        $pagination->total_items = $total;
        $pageLinks = $pagination->render();
        $this->template->content = View::factory('index')
            ->set('pracownicy', $pracownicy)
            ->bind('pageLinks', $pageLinks);
    }

    public function action_longList() {
        $modelPracownicy = new Model_Pracownicy();

        $pagination = Pagination::factory(array(
            'total_items'    => $modelPracownicy->count(),
            'items_per_page' => 50,
        ));

        $pracownicy = $modelPracownicy->getList($pagination);
        $pageLinks = $pagination->render();
        $this->template->content = View::factory('longList')
            ->set('pracownicy', $pracownicy)
            ->bind('pageLinks', $pageLinks);
    }

    public function action_appendToLongList() {
        if ( ! $this->request->is_ajax()) {
            die('non-ajax');
        }

        $modelPracownicy = new Model_Pracownicy();

        $pagination = Pagination::factory(array(
            'total_items'    => $modelPracownicy->count(),
            'items_per_page' => 50,
        ));

        if ($_GET['page'] > $pagination->current_page) {
            $this->request->headers(
                'Content-type',
                'application/json; charset=' . Kohana::$charset
            );
            $this->response->body(json_encode(array('success' => false)));
        } else {
            $pracownicy = $modelPracownicy->getList($pagination);
            $pageLinks = $pagination->render();

            foreach ($pracownicy as $worker) {
                $workerList[] = array(
                    'id' => $worker['id'],
                    'imie' => $worker['imie'],
                    'nazwisko' => $worker['nazwisko'],
                    'stanowisko' => $worker['stanowisko'],
                    'pesel' => $worker['pesel']
                );
            }
            $this->request->headers('Content-type',
                'application/json; charset=' . Kohana::$charset);
            $this->response->body(json_encode(array(
                'workers' => $workerList,
                'success' => true
            )));
        }
    }


    public function action_add() {
        $modelPracownicy = new Model_Pracownicy();
        if ($this->request->post()) {
            $validate = $this->checkData($_POST);
       
            if ($validate->check()) {
                unset($_POST['csrf']);
                $modelPracownicy->add($_POST);
                $this->redirect('/');
            } else {                
                $error = $validate->errors('msg');
            }

        }
        $this->template->content = View::factory('add')->bind('error', $error);
    }    
    public function action_edit() {
        $id = $this->request->param('id');
        $modelPracownicy = new Model_Pracownicy();
        $pracownicy = $modelPracownicy->get($id);
        
        if ($this->request->post()) {

            $validate = $this->checkData($_POST);

            if ($validate->check()) {
                $modelPracownicy->update($id, $_POST);
                $this->redirect('/');
            } else {
                $error = $validate->errors('msg');
                $pracownicy=$_POST;
            }
        }
    
        $this->template->content = View::factory('edit')
            ->set('pracownicy',  $pracownicy)
            ->bind('error', $error);
    }

    public function action_delete() {     
    $id = $this->request->param('id');
    $modelPracownicy = new Model_Pracownicy();
    $modelPracownicy->delete($id);
    $this->redirect('/');
    }

    public function action_search() {
        $this->template->content = View::factory('searchWorker');
    }

    public function action_returnAutosuggestSearchWorkers() {
        if ( ! $this->request->is_ajax()) {
            die('non-ajax');
        }

        $modelPracownicy = new Model_Pracownicy();
        $searchResults = $modelPracownicy->search($_GET['searchString']);
        foreach ($searchResults as $key => $value) {
            $name[] = $value['imie'] . ' ' . $value['nazwisko'];
        }
        $this->request->headers(
            'Content-type',
            'application/json; charset=' . Kohana::$charset
        );
        $this->response->body(json_encode($name));
    }


    public function after() {        
        parent::after();
    }

    public function checkData($POST) {
        $validate = new Validation($POST);

        $validate->rule('imie', 'not_empty') 
            ->rule('nazwisko', 'not_empty')
            ->rule('stanowisko', 'not_empty')
            ->rule('pesel', 'not_empty')
            ->rule('pesel', 'numeric')
            ->rule('pesel', 'exact_length', array(':value', 11))
            ->rule('csrf', 'not_empty')
            ->rule('csrf', 'Security::check');
        return $validate;
    }
}

