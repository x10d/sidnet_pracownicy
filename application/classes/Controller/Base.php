<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $template = 'template/template';
    protected $_title;
    protected $__JS__;
    protected $__CSS__;
    
    public function before()
    {
/*        $this->auto_render = !$this->request->is_ajax(); 
        if($this->auto_render === TRUE) {
            parent::before();
        }
*/
        parent::before();
        if($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        } else {
            $this->auto_render = TRUE;
        }
        $this->_title = 'Sidnet - lista pracowników';
        $this->__JS__ = 'themes/assets/js/';
        $this->__CSS__= 'themes/assets/css/';

        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
        View::bind_global('auth', $this->auth);
        View::bind_global('user', $this->user);
        
        $isLogged = $this->auth->logged_in();
        View::bind_global('isLogged', $isLogged);
        $this->auth_data = array(
            'isLogged' => $isLogged
        );

    }
    
    public function after()
    {
        $_script = array(
            $this->__JS__.'jquery-1.9.1.min.js',
            $this->__JS__.'jquery.validate.js',
            $this->__JS__.'myScripts.js'
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
