<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Movies extends Controller_Base
{
    public function before() {
        parent::before();
    }

    public function action_search() {
        $this->template->content = View::factory('searchMovie');
    }
    
    public function after() {        
        parent::after();
    }
}
