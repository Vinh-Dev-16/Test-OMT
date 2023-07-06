<?php

namespace Thinkpad\Omt\Models;
use Thinkpad\Omt\Models\DB as DB;
class Post extends DB
{

    protected $table = 'posts';
    public function getPost()
    {
        $post = "SELECT * FROM posts";
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

    public function insertPost($data) {
        $sql = 'INSERT INTO posts(title, content) VALUES(:title, :content)';

        if (!(empty($data['title'] || empty($data['content'])))) {

        $statement = $this->pdo->prepare($sql);

        $statement->execute([
                ':title' => $data['title'],
                ':content' => $data['content'],
        ]);
        }

    }

    public function deletePost($id){
        if ($this->getOnePost($id)) {
            $sql = "DELETE FROM $this->table WHERE id = $id";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        }else {
            loadView('User/design/Post/index.php', ['error' =>'Không có sản phẩm này']);
        }
    }

}
