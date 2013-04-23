<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Members extends Controller_Base {

    public function before(){
        parent::before();
        # dostęp do kontrolera Pracownicy wyłącznie po zalogowaniu
        $user = Auth::instance()->get_user(); // pobieranie danych usera
        if (!$user) $this->redirect('/login'); // jesli nie jest zalogowany - do logowania        
    }

    public function after(){
        parent::after();
    }


}
