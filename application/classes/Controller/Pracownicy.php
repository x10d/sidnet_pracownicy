<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pracownicy extends Controller_Base {

    public function before(){
        parent::before();

        # dostęp do kontrolera Pracownicy wyłącznie po zalogowaniu
        $user = Auth::instance()->get_user(); // pobieranie danych usera
        if (!$user) $this->redirect('/zaloguj'); // jesli nie jest zalogowany - do logowania        
    }
    public function action_index(){
        $modelPracownicy = new Model_Pracownicy();
        $pracownicy = $modelPracownicy->getList();
        $this->template->content = View::factory('index')->set('pracownicy',$pracownicy);
    }    
    public function action_add(){
        $modelPracownicy = new Model_Pracownicy();
        if($this->request->post()){
            $validate = $this->checkData($_POST);
       
            if($validate->check()){
		$modelPracownicy->add($_POST);
		$this->redirect('/');
            } else {                
                $error = $validate->errors('msg');
            }

        }
	$this->template->content = View::factory('add')->bind('error',$error);
    }    
    public function action_edit(){
	$id = $this->request->param('id');
	$modelPracownicy = new Model_Pracownicy();
	$pracownicy = $modelPracownicy->get($id);
	
	if($this->request->post()){

	  $validate = $this->checkData($_POST);

            if($validate->check()){
		$modelPracownicy->update($id,$_POST);
		$this->redirect('/');
            } else {
                $error = $validate->errors('msg');
		$pracownicy=$_POST;
            }
	}
	
	$this->template->content = View::factory('edit')->set('pracownicy',$pracownicy)->bind('error',$error);
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

    public function checkData($POST)
    {
        $validate = new Validation($POST);

        $validate->rule('imie', 'not_empty') 
                 ->rule('nazwisko', 'not_empty')
                 ->rule('stanowisko', 'not_empty')
                 ->rule('pesel', 'not_empty')
                 ->rule('pesel', 'numeric')
                 ->rule('pesel','exact_length', array(':value', 11));
        return $validate;
    }
}
