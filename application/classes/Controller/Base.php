<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $template = 'template/template';
    protected $_title;
    protected $__JS__;
    protected $__CSS__;
    
    public function before()
    {
        parent::before();
        $this->_title = 'Sidnet - lista pracowników';
        $this->__JS__ = 'public/js/';
        $this->__CSS__= 'public/css/';

        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
        View::bind_global('auth', $this->auth);
        View::bind_global('user', $this->user);
        
        $is_logged = $this->auth->logged_in();
        View::bind_global('is_logged', $is_logged);
        $this->auth_data = array(
            'is_logged' => $is_logged
        );
    }
    
    public function after()
    {
        $_script = array(
        );

        $_style = array(
        );

        $this->template->header = View::factory('template/partial/header');
        $this->template->footer = View::factory('template/partial/footer');
        
        $this->template->title = $this->_title;
        $this->template->style = $_style; 
        $this->template->script = $_script; 
        
        parent::after();
    }    
}
