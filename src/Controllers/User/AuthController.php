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

            if (empty($data['name']) || empty($data['email']) || empty($data['password']) || empty($data['rePassword'])) {
                loadView('register.php', ['error' => 'Không được để trống trường nào']);
            }
            if (strlen($data['password'])  < 8 ) {
                loadView('register.php', ['password' => "Mật khẩu phải lớn hơn 8"]);
            }
            if(!($data['password'] == $data['rePassword'])) {
                loadView('register.php', ['rePassword' => "Hai mật khẩu phải trùng nhau"]);
            }

            $db = new User();
            try {
                $db->doRegister($data);

            }catch (\Exception $e) {

               echo $e->getMessage();
            }
        }
    }

    public function login() {
        view('login.php');
    }

}