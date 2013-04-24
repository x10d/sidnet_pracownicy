<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_User extends Controller_Base
{
    public function before() {
        parent::before();        
    }

    public function action_login() {
        if (Arr::get($this->request->post(), 'submit')) {
            $validate = Validation::factory($this->request->post())
                ->rule('email', 'email')
                ->rule('email', 'not_empty')
                ->rule('password', 'not_empty');
            if ($validate->check()) {
                $loginCheck = Auth::instance()->login(
                    Arr::get($this->request->post(), 'email'),
                    Arr::get($this->request->post(), 'password')
                );
                if ($loginCheck) {
                    $this->redirect('/');
                } else {
                    $error['email'] = 'Login lub/i hasło niepoprawne';
                }
            } else {
                $error = $validate->errors('msg');
            }
        }
        $this->template->content = View::factory('login')->bind('error', $error);
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
                ->rule(
                    'passwordchecker',
                    'matches',
                    array(':validation', 'passwordchecker', 'password')
                );
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
            } else {
                $error = $validate->errors('msg');
            }
        }
        $this->template->content = View::factory('register')->bind('error', $error);
    }

    public function action_password() {
        $user = $this->auth->get_user();

        if (!$user) {
            $this->redirect('/zaloguj');
        }

        if (Arr::get($this->request->post(), 'submit')) {
            $validate = Validation::factory($this->request->post())
                ->rule('oldpassword', 'not_empty')
                ->rule('password', 'not_empty')
                ->rule(
                    'passwordchecker',
                    'matches',
                    array(':validation', 'passwordchecker', 'password')
                );
            if ($validate->check()) {
                $hashedPassword = $this->auth->hash_password(
                    Arr::get($this->request->post(), 'oldpassword')
                );
                if ($user->password == $hashedPassword) {
                    $user->password = Arr::get($this->request->post(), 'password');
                    $user->save();
                    $this->redirect('/');                    
                }
                $error['oldpassword'] = 'Stare hasło nie jest poprawne';
            } else {
                $error = $validate->errors('msg');
            }
        }
        $this->template->content = View::factory('password')->bind('error', $error);
    }

    public function action_getUserList() {
        if ($this->request->is_ajax()) {
            $users = ORM::factory('User')->find_all();
            foreach ($users as $user) {
                $userList[] = array(
                    'id' => $user->id,
                    'username' => $user->username,
                    'email' => $user->email
                );
            }
            $this->request->headers(
                'Content-type',
                'application/json;charset=' . Kohana::$charset
            );
            $this->response->body(json_encode($userList));
        } else {
            die('non-ajax');
        }
    }

    public function after() {
        parent::after();
    }
}
