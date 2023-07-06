<?php

namespace Thinkpad\Omt\Controllers\User;

use http\Client\Request;
use Thinkpad\Omt\Models\User;

class AuthController
{
    public function register() {

        view('register.php');
    }

    public function doRegister() {
        if (isset($_POST['submit'])) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $rePassword = htmlspecialchars($_POST['rePassword']);

            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'rePassword' => $rePassword,
            );

            $db = new User();
            try {
                $db->doRegister($data);

            }catch (\Exception $e) {

               echo $e->getMessage();
            }
        }
    }

}