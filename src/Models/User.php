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

    public function getOneUser($id) {
        $sql = 'SELECT * FROM users WHERE id =' . $id;
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function findUser($name) {
        echo $name;
        $sql = 'SELECT * FROM users WHERE name = ?';
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $name);
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



    public function checkName($name)
    {

            $checkName  = "Select count(*) from users where name = ?";
            $resultName = $this->pdo->prepare($checkName);
            $resultName->bindParam(1, $name);
            $resultName->execute();
            return $resultName->fetchColumn();
    }

    public function checkEmail($email)
    {
        $checkEmail  = "Select count(*) from users where email = ?";
        $resultEmail = $this->pdo->prepare($checkEmail);
        $resultEmail->bindParam(1, $email);
        $resultEmail->execute();
        return $resultEmail->fetchColumn();
    }


    public function updateRoleUser($id , $data) {
        $sql = "UPDATE users SET role = :role WHERE id = " . $id;
        $statement = $this->pdo->prepare($sql);
        $statement->execute(
            [
                ':role' => $data['role'],
            ]
        );
    }
}