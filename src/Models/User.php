<?php

namespace Thinkpad\Omt\Models;
use PDO;
use PDOException;
use Thinkpad\Omt\Models\DB as DB;
class User extends DB
{
    public function getUsers() {
        $sql = 'SELECT * FROM users';
        $result = $this->pdo->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }

    public function findUser($name) {
        echo $name;
        $sql = 'SELECT * FROM users WHERE name = :name'  ;
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':name', $name, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function doRegister($data) {

        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(
            [
                ':name' => $data['name'],
                ':email' => $data['email'],
                ':password' => md5($data['password']),
            ]
        );
    }



    public function checkName($name): bool
    {
        $checkName  = "Select name from users where name = ?";
        $resultName = $this->pdo->prepare($checkName);
        $resultName->bindParam(1, $name, PDO::PARAM_INT);
        $resultName->execute();
        if(empty($resultName->fetch(PDO::FETCH_OBJ))) {
            return false;
        }else {
            return true;
        }
    }

    public function checkEmail($email): bool
    {
        $checkEmail  = "Select 1 from users where email = ?";
        $resultEmail = $this->pdo->prepare($checkEmail);
        $resultEmail->bindParam(1, $email, PDO::PARAM_INT);
        $resultEmail->execute();
        if(empty($resultEmail->fetch(PDO::FETCH_OBJ))) {
            return false;
        }else {
            return true;
        }
    }
}