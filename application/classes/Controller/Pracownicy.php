<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pracownicy extends Controller_Base {

    public function before(){
        parent::before();        
    }
    public function action_index(){
        $modelPracownicy = new Model_Pracownicy();
        $pracownicy = $modelPracownicy->getList();
        $this->template->content = View::factory('index')->set('pracownicy',$pracownicy);
    }    
    public function action_add(){
        $modelPracownicy = new Model_Pracownicy();
        if($this->request->post()){
            $modelPracownicy->add($_POST);
	    $this->redirect('pracownicy');
        }
	$this->template->content = View::factory('add');
    }    
    public function after(){        
        parent::after();
    }    
}
