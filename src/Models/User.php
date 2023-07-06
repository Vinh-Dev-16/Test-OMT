<?php

namespace Thinkpad\Omt\Models;
use PDO;
use PDOException;
use Thinkpad\Omt\Models\DB;
class User extends DB
{
    public function getUsers() {
        $sql = 'SELECT * FROM users';
        $result = $this->pdo->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }

    public function doRegister($data) {
        try {
        $this->pdo->beginTransaction();

//        Validate tên

            try {
                $checkName  = "Select count(*) from users where name = ?";
                $resultName = $this->pdo->prepare($checkName);
                $resultName->bindParam(1, $data['name'], PDO::PARAM_INT);
                $resultName->execute();
                if($resultName > 0){
                loadView('register.php', ['name' => "Đã trùng tên đăng nhập"]);
                }
            }catch (PDOException $e) {
                echo $e->getMessage();
            }


//          Validate email

            try {
            $checkEmail  = "Select count(*) from users where email = ?";
            $resultEmail = $this->pdo->prepare($checkEmail);
            $resultEmail->bindParam(1, $data['email'], PDO::PARAM_INT);
            $resultEmail->execute();
            if($resultEmail > 0){
                loadView('register.php', ['email' => "Đã trùng email"]);
            }
            }catch (PDOException $e){
                echo $e->getMessage();
            }


        if (empty($data['name']) || empty($data['email']) || empty($data['password']) || empty($data['rePassword'])) {
            loadView('register.php', ['error' => 'Không được để trống trường nào']);
        }
        echo $data['password'];
        if (strlen($data['password'])  < 8 ) {
            loadView('register.php', ['password' => "Mật khẩu phải lớn hơn 8"]);
        }
        if(strcmp($data['password'], $data['rePassword']) > 0) {
            loadView('register.php', ['password' => "Hai mật khẩu phải trùng nhau"]);
        }


        }catch (PDOException $e) {
            $this->pdo->rollBack();
            die($e->getMessage());
        }

    }


}