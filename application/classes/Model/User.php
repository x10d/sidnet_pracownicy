<?php
    class Model_User extends Model_Auth_User {
        static public function isOldPasswordCorrect($oldpassword) {
            $user = Auth::instance()->get_user();
            if ($user->password == Auth::instance()->hash_password($oldpassword)) {
                return true;
            } else {
                return false;
            }
        }
    }
?>
