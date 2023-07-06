<?php
 namespace Thinkpad\Omt\Controllers\User;

 use Exception;
 use Thinkpad\Omt\Models\Post;

 class PostController {

     public function index() {
         $postModel = new Post();
         $posts = $postModel->getPost();
         loadView("User/design/Post/index.php", compact('posts'));
     }

     public function create() {
         view("User/design/Post/create.php");
     }

     public function store() {
         if(isset($_POST['submit'])) {
             $title = $_POST['title'];
             $content = $_POST['content'];

             $data = array(
                 'title' => $title,
                 'content' => $content,
             );

             if (empty($title) && empty($content)) {
                 loadView('User/design/Post/create.php', ['error' => 'Không được để trống trường nào']);
             } else if(empty($title)) {
                 loadView('User/design/Post/create.php', ['title' => 'Không được để trống trường title']);
             } else if(empty($content)) {
                 loadView('User/design/Post/create.php', ['content' => 'Không được để trống trường content']);
             }else {
                 $db = new Post();
                 try {
                     $db->insertPost($data);
                     $posts = $db->getPost();
                     $success = 'Đã thêm bài thành công';

                     loadView('User/design/Post/index.php', compact('posts' , ['success'=> 'success']));

                 }catch (Exception $e) {
                     loadView('User/design/Post/create.php', ['error'=>$e->getMessage()]);
                 }
             }


         }else{
             echo 'Không nhận được ô submit';
         }
     }

     public function edit($id) {
         view("User/design/Post/edit.php");
    }

    public function update($id) {

    }

    public function delete($id) {
        $db = new Post();
        try {
            $db->deletePost($id);
            $posts = $db->getPost();
            $success = 'Đã xóa post thành công';
            loadView('User/design/Post/index.php', compact('posts' ,['success' => 'success']));
        }catch (Exception $e) {
            $posts = $db->getPost();
            $error = 'Đã xảy ra lỗi';
            loadView('User/design/Post/index.php',  compact('posts' ,['error' => 'error']));
        }
    }
 }