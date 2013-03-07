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
	    $this->redirect('/');
        }
	$this->template->content = View::factory('add');
    }    
    public function action_edit(){
	$id = $this->request->param('id');
	$modelPracownicy = new Model_Pracownicy();
	$pracownicy = $modelPracownicy->get($id);
	
	if($this->request->post()){
	    $modelPracownicy->update($id,$_POST);
	    $pracownicy=$_POST;
	    $this->redirect('/');
	}
	
	$this->template->content = View::factory('edit')->set('pracownicy',$pracownicy);
    }

    public function action_delete(){     
	$id = $this->request->param('id');
	$modelPracownicy = new Model_Pracownicy();
	$modelPracownicy->delete($id);
	$this->redirect('/');
    }
    public function after(){        
        parent::after();
    }    
}
