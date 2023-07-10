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
            if (empty($data['name']) || empty($data['email']) || empty($data['password']) || empty($data['rePassword'])) {
                loadView('register.php', ['error' => 'Không được để trống trường nào']);
            } elseif (strlen($data['password'])  < 8 ) {
                loadView('register.php', ['password' => "Mật khẩu phải lớn hơn 8"]);
            } elseif(!($data['password'] == $data['rePassword'])) {
                loadView('register.php', ['rePassword' => "Hai mật khẩu phải trùng nhau"]);
            }elseif (!$db->checkEmail($data['name'])  == $data['name']) {
                loadView('register.php', ['name' => "Tên này đã tồn tại"]);
            }elseif (!$db->checkEmail($data['email'])) {
                loadView('register.php', ['email' => "Email này đã tồn tại"]);
            }
            else{
                    $db->doRegister($data);
                    $success = "Đã đăng kí thành công";
                    redirect('User/auth/login' , compact('success'));
            }
        }
    }

    public function login() {
        view('login.php');
    }


    public function doLogin() {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $data = array(
                'name' => $name,
                'password' => $password,
            );

            $db = new User();
            if (empty($db->findUser($data['name']))) {
                loadView('login.php', ['name' => 'Name not found']);
            } else {
                $findUser = $db->findUser($data['name']);
//                if (password_verify($data['password'], $findUser->password) && $findUser->role == 1) {
                    $_SESSION['user'] = $findUser->name;
                    redirect('Admin/post/index', ['message' => 'Đăng nhập thành công']);
//                } else {
//                    loadView('login.php', ['password' => 'Sai password']);
//                }
            }
        }
    }

    public function doLogOut() {

        unset($_SESSION['user']);
        redirect('User/auth/login',['message' => 'Đã logout']);
    }
}