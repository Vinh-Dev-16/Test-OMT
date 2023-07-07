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
            }else {
                $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
                $statement = $this->pdo->prepare($sql);
                $statement->execute(
                    [
                        ':name' => $data['name'],
                        ':email' => $data['email'],
                        ':password' => md5($data['password']),
                    ]
                );
//                $success = "Đã đăng kí thành công";
//                redirect('User/auth/login' , compact('success'));
            }



            }catch (PDOException $e){
                echo $e->getMessage();
            }

        }catch (PDOException $e) {
            $this->pdo->rollBack();
            die($e->getMessage());
        }

    }


}