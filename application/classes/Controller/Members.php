<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Members extends Controller_Base
{
    public function before() {
        parent::before();
        # dostęp do kontrolera Pracownicy wyłącznie po zalogowaniu
        $user = Auth::instance()->get_user();
        if ( ! $user) {
        	$this->redirect('/login');
        }
    }

    public function after() {
        parent::after();
    }
}
