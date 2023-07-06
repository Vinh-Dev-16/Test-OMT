<?php

namespace Thinkpad\Omt\Controllers\User;

use http\Client\Request;
use Thinkpad\Omt\Models\User;

class AuthController
{
    public function index() {
        $userModel = new User();
        $users = $userModel->getUsers();
        loadView('User/design/index.php' , compact('users'));
    }

    public function create() {
        loadView('User/design/create.php', compact(''));
    }

    public function store() {
       if (isset($_POST['submit'])){
           $name = $_POST['user'];
           $password = md5($_POST['password']);
       }
    }
}