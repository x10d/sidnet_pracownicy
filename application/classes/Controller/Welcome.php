<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base
{

    public function action_index() {
        $this->template->content = View::factory('home');
    }

    public function action_masonryPix() {
        $modelPictures = new Model_Pictures();
        $pixTable = $modelPictures->getList();
        $this->template->content = View::factory('masonryPix')->bind('pixTable', $pixTable);
    }

} // End Welcome
