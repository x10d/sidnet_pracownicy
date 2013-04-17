<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Auth extends Controller_Base {
 
    public function before() {
        parent::before();        
    }

    public function action_login() {
        $validate = Validation::factory($this->request->post())
            ->rule('email', 'email')
            ->rule('email', 'not_empty')
            ->rule('password', 'not_empty');
        if ($validate->check()) {
            $r = Auth::instance()->login(Arr::get($this->request->post(), 'email'), Arr::get($this->request->post(), 'password'));
            if ($r) {
                $this->redirect('/');
            }
            $error = 'Niepoprawne dane logowania!';
        }
        $this->template->content = View::factory('login');
    }

    public function action_logout() {
        Auth::instance()->logout();
        $this->redirect('/');
    }

    public function action_register() {
        if (Arr::get($this->request->post(), 'submit')) {
            $validate = Validation::factory($this->request->post())
                ->rule('email', 'not_empty')
                ->rule('email', 'email')
                ->rule('username', 'not_empty')
                ->rule('password', 'not_empty')
                ->rule('passwordchecker',  'matches', array(':validation', 'passwordchecker', 'password'));
            if ($validate->check()) {
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
            $error = 'Pola nie są poprawnie wypełnione';
        }
        $this->template->content = View::factory('register')->bind('error', $error);
    }

    public function action_password() {
        $user = $this->auth->get_user(); // pobieranie danych usera
        if (!$user) $this->redirect('/zaloguj'); // jesli nie jest zalogowany - do logowania
        $validate = Validation::factory($this->request->post())
            ->rule('oldpassword', 'not_empty')
            ->rule('password', 'not_empty')
            ->rule('passwordchecker',  'matches', array(':validation', 'passwordchecker', 'password'));
        if ($validate->check()) {
            if ($user->password == $this->auth->hash_password(Arr::get($this->request->post(), 'oldpassword'))) {
                $user->password = Arr::get($this->request->post(), 'password');
                $user->save();
                $this->redirect('/');                    
            }
            $error = 'Stare hasło nie jest poprawne';
        }
        $this->template->content = View::factory('password')->bind('error', $error);
    }

    public function after() {
        parent::after();
    }
}
    