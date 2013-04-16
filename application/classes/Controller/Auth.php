<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Auth extends Controller_Base {
 
    public function before() {
        parent::before();        
    }

    public function action_login() {
        if(isset($_POST['submit'])){
            $r = Auth::instance()->login($_POST['email'], $_POST['password']);
            if ($r) {
                $this->redirect('/');
            }
            $error = 'Niepoprawne dane logowania!';
        }
        $this->template->content = View::factory('login')->bind('error', $error);
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
            if ($user->password == Arr::get($this->request->post(), 'passwordchecker')) {
                $user->save();
                $role = ORM::factory('Role', '1');
                $user->add('roles', $role);
                $user->save();
                $this->redirect('/');
            }
            $error='Hasła nie są identyczne!';
        }
        $this->template->content = View::factory('register')->bind('error', $error);
    }

    public function action_password() {
        $user = $this->auth->get_user(); // pobieranie danych usera
        if (!$user) $this->redirect('/zaloguj'); // jesli nie jest zalogowany - do logowania
        if (isset($_POST['submit'])) {
            if ($user->password == $this->auth->hash_password(Arr::get($this->request->post(), 'oldpassword'))) {
                if (Arr::get($this->request->post(), 'password') == Arr::get($this->request->post(), 'passwordchecker')) {
                    $user->password = Arr::get($this->request->post(), 'password');
                    if ($user->password) {
                        $user->save();
                        $this->redirect('/');                    
                    }
                }
            }
        }
        $this->template->content = View::factory('password');
    }

    public function after() {
        parent::after();
    }
}
