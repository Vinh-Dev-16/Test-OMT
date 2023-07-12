<?php

namespace Thinkpad\Omt\Models;
use Thinkpad\Omt\Models\DB as DB;
class Post extends DB
{

    protected $table = 'posts';
    public function getPost()
    {
        $post = "SELECT posts.*, categories.name AS category_name 
                       FROM posts
                       JOIN categories ON posts.category_id = categories.id";
        $stmt = $this->pdo->prepare($post);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getOnePost($id) {
        $post = "SELECT * FROM posts WHERE id = $id";
        $stmt = $this->pdo->prepare($post);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getPostWithCategory($category ,$limt) {
        $sql = "SELECT * FROM posts WHERE category_id = " .$category . " ORDER BY id DESC LIMIT " .$limt;
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }


    public function insertPost($data) {
        $sql = 'INSERT INTO posts(category_id, author,  title, content, image) VALUES(:category_id, :author,:title, :content, :image)';
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
                ':category_id' => $data['category_id'],
                ':author' => $data['author'],
                ':title' => $data['title'],
                ':content' => $data['content'],
                ':image' => $data['image'],
        ]);
    }

    public function updatePost($data, $id) {
        if($this->getOnePost($id)) {
        $sql = 'UPDATE posts SET title = :title, content = :content, author = :author, category_id = :category_id, image = :image WHERE id =' .$id ;
        if (!(empty($data['title'] || empty($data['content'])))) {
            $statement = $this->pdo->prepare($sql);
            $statement->execute([
                ':title' => $data['title'],
                ':content' => $data['content'],
                ':image' => $data['image'],
                ':category_id' => $data['category_id'],
                ':author' => $data['author'],
            ]);
        }
        }
    }

    public function deletePost($id){
        if ($this->getOnePost($id)) {
            $sql = "DELETE FROM $this->table WHERE id = $id";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        }else {
            loadView('Admin/design/Post/index.php', ['error' =>'Không có sản phẩm này']);
        }
    }

}
