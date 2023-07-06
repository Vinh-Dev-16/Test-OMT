<?php

namespace Thinkpad\Omt\Models;
use Thinkpad\Omt\Models\DB;
class User extends DB
{
    public function getUsers() {
        $sql = 'SELECT * FROM users';
        $result = $this->pdo->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }
}