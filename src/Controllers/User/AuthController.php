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
            }elseif ($db->checkName($data['name']) > 0 ) {
                loadView('register.php', ['name' => "Tên này đã tồn tại"]);
            }elseif ($db->checkEmail($data['email'] ) > 0) {
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
            if  (empty($_POST['name'] || empty($_POST['password']))){
                loadView('login.php' , ['error' => 'Không được để trống trường nào']);
            }else {
                $name = $_POST['name'];
                $password = trim($_POST['password']);

                $data = array(
                    'name' => $name,
                    'password' => $password,
                );

                $db = new User();
                if (($db->checkName($data['name'])) == 0) {
                    loadView('login.php', ['name' => 'Name not found']);
                } else {
                    $findUser = $db->findUser($data['name']);
                    var_dump($data['password'] );
                    var_dump($findUser->password);
                    if (md5($data['password']) === $findUser->password) {
                        if($findUser->role == 1) {
                            $_SESSION['user'] = $findUser->name;
                            redirect('Admin/post/index', ['message' => 'Đăng nhập thành công']);
                        }else {
                            redirect('User/home/index', ['message' => 'Đăng nhập thành công']);
                        }
                            loadView('User/home/index' , ['message' => 'Đăng nhập thành công']);
                    } else {
                            loadView('login.php', ['password' => 'Sai password']);
                    }
                }
            }

        }
    }

    public function doLogOut() {

        unset($_SESSION['user']);
        redirect('User/auth/login',['message' => 'Đã logout']);
    }


    public function index() {
        $db= new User();
        $users =  $db->getUsers();
        loadView('Admin/design/User/index.php' , compact('users'));
    }

    public function edit($id) {
        $db= new User();
        $users = $db->getOneUser($id);
        loadView('Admin/design/User/edit.php', compact('users'));
    }

    public function update ($id) {
        if (isset($_POST['submit'])) {
            if (empty ($_POST['role'])) {
                $role = "Không tìm thấy trường này";
                loadView('Admin/design/User/edit.php', compact('role'));
            }else {
                $role = $_POST['role'];
                $data  = array('role' => $role);
                $db = new User();
                try {
                    $db->updateRoleUser($id , $data);
                    $success = "Đã sửa role user thành công";
                    redirect("User/auth/index", compact('success'));
                }catch (\Exception $e){
                    $error = "Đã xảy ra lỗi";
                    returnURL("User/auth/edit", compact('error'));
                }
            }
        } else {
            $error = 'Đã xảy ra lỗi về submit form';
            returnURL("User/auth/edit", compact('error'));
        }
    }
}