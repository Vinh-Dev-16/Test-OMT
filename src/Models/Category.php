<?php

namespace Thinkpad\Omt\Models;
use Thinkpad\Omt\Models\DB as DB;
class Category extends DB
{
    private $table = 'categories';
    public function getAllCategory() {
        $sql = "SELECT * FROM $this->table";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getOneCategory($id) {
        $sql = "SELECT * FROM $this->table WHERE id = ". $id;
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getLimitCategory($limit) {
        $sql = "SELECT * FROM $this->table LIMIT " .$limit;
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function insertCategory($data) {
        $sql = "INSERT INTO $this->table (name) VALUES (:name)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':name', $data['name']);
        $statement->execute();
    }

    public function updateCategory($data ,$id) {
        if($this->getOneCategory($id)) {
            $sql = 'UPDATE  categories SET name = :name WHERE id =' . $id;
            if (!(empty($data['name']))) {
                $statement = $this->pdo->prepare($sql);
                $statement->execute([
                    ':name' => $data['name'],
                ]);
            }
        }
    }

    public function deleteCategory($id) {
        if ($this->getOneCategory($id)) {
            $sql = "DELETE FROM $this->table WHERE id = $id";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        }else {
            loadView('Admin/design/Category/index.php', ['error' =>'Không có sản phẩm này']);
        }
    }
}