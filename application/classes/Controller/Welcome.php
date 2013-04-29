<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base
{
    public function action_index() {
        $this->template->content = View::factory('home');
    }

	public function action_masonryPix() {
		$images = glob(DOCROOT . '/themes/assets/pix/*.jpg', GLOB_BRACE);
        $this->template->content = View::factory('masonryPix');
    }

} // End Welcome
