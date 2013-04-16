<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Auth extends Controller_Base {
 
    public function before() {
        parent::before();        
    }

    public function action_login() {
        if(isset($_POST['submit'])){
            $r = Auth::instance()->login($_POST['email'], $_POST['password']);
            $this->redirect('/');
        }
        $this->template->content = View::factory('login');
    }

    public function action_logout() {
        Auth::instance()->logout();
        $this->redirect('/');
    }

    public function action_register() {
        if (isset($_POST['submit'])) {

            $user = ORM::factory('User');
            $user->email = Arr::get($this->request->post(), 'email');
            $user->username = Arr::get($this->request->post(), 'username');
            $user->password = Arr::get($this->request->post(), 'password');
            $user->save();
            $role = ORM::factory('Role', '1');
            $user->add('roles', $role);
            $user->save();
            $this->redirect('/');
        }
        $this->template->content = View::factory('register'); 
   }

    public function after() {
        parent::after();
    }
}
