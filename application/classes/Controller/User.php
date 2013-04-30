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
                    $this->redirect('/' . Arr::get($this->request->post(), 'requestedUri'));
                } else {
                    $error['email'] = 'Login lub/i hasło niepoprawne';
                }
            } else {
                $error = $validate->errors('msg');
            }
        }
        $requestedUri = $this->request->query('requestedUri');
        $this->template->content = View::factory('login')
            ->bind('error', $error)
            ->bind('requestedUri', $requestedUri);
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
                )
                ->rule('oldpassword', 'Model_User::isOldPasswordCorrect');
            if ($validate->check()) {
                $user->password = Arr::get($this->request->post(), 'password');
                $user->save();
                $this->redirect('/');                    
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

    public function action_loginFb() {
        $request = Arr::get($_REQUEST, 'signed_request');
        $access_token = Arr::get($_REQUEST, 'auth_token');
        $request = $this->_parse_fb_request($request);
        $fb_id = arr::get($request, 'user_id');

        $fb_request = Request::factory(
                'https://graph.facebook.com/me?access_token=' . $access_token
            )
            ->execute();
        $status = $fb_request->status();
        
        if ($status === 200) {
            $me = $fb_request->body();
            $me = json_decode($me, TRUE);
            $user = ORM::factory('User')
                ->where('email', '=', Arr::get($me, 'email'))
                ->find();

            if ($user->loaded()) {
                if ($user->fb_id == 0) {
                    $user->fb_id = Arr::get($me, 'id');
                    $user->save();
                }
            }
            $this->auth->force_login($user->username);
            $this->redirect('/');
        } else {
            $error = 'Nie można było zalogować przez Facebook';
            $this->template->content = View::factory('login')->bind('error', $error);
        }
    }

    private function _parse_fb_request($signed_request) {
        list($encoded_sig, $payload) = explode('.', $signed_request, 2);
        
        $sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
        $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);
        
        if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
            Log::error('Unknown algorithm. Expected HMAC-SHA256');
            error_log('Unknown algorithm. Expected HMAC-SHA256');
            return null;
        }
        
        $expected_sig = hash_hmac(
            'sha256',
            $payload,
            Kohana::$config->load('facebook.secret'),
            $raw = true
        );
        if ($sig !== $expected_sig) {
            Log::error('Bad Signed JSON signature!');
            error_log('Bad Signed JSON signature!');
            return null;
        }
        
        return $data;
    }

    public function action_loginGp() {
        $access_token = Arr::get($_REQUEST, 'auth_token');
        $gp_request = Request::factory(
            'https://www.googleapis.com/oauth2/v2/userinfo?access_token=' . $access_token
        )->execute();
        $userinfo = $gp_request->body();
        $status = $gp_request->status();
        
        if ($status === 200) {
            $me = json_decode($userinfo, TRUE);
            
            $user = ORM::factory('User')
                ->where('email', '=', Arr::get($me, 'email'))
                ->find();

            if ($user->loaded()) {
                if ($user->gp_id == 0) {
                    $user->gp_id = Arr::get($me, 'id');
                    $user->save();
                }
            } else {
                $user->gp_id = Arr::get($me, 'id');
                $user->email = Arr::get($me, 'email');
                $user->username = Arr::get($me, 'email');
            }
            $this->auth->force_login($user->username);
            $this->redirect('/');
        } else {
            $error = 'Nie można było zalogować przez Google+';
            $this->template->content = View::factory('login')->bind('error', $error);
        }
    }

    public function after() {
        parent::after();
    }
}
