<?php
 namespace Thinkpad\Omt\Controllers\Admin;

 use Exception;
 use Thinkpad\Omt\Models\Post;

 class PostController {

     public function index() {
         $postModel = new Post();
         $posts = $postModel->getPost();
         loadView("Admin/design/Post/index.php", compact('posts'));
     }

     public function create() {
         view("Admin/design/Post/create.php");
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
                 loadView('Admin/design/Post/create.php', ['error' => 'Không được để trống trường nào']);
             } else if(empty($title)) {
                 loadView('Admin/design/Post/create.php', ['title' => 'Không được để trống trường title']);
             } else if(empty($content)) {
                 loadView('Admin/design/Post/create.php', ['content' => 'Không được để trống trường content']);
             }else {
                 $db = new Post();
                 try {
                     $db->insertPost($data);
                     $success = 'Đã thêm bài thành công';

                     redirect('Admin/post/index', compact( 'success' ));

                 }catch (Exception $e) {
                     $error = "Không nhận đuợc ô submit";
                     returnURL('Admin/design/Post/create.php', compact('error'));
                 }
             }

         }else{
             echo 'Không nhận được ô submit';
         }
     }

     public function edit($id) {
         $db = new Post();
         $post = $db->getOnePost($id);
         loadView("Admin/design/Post/edit.php", compact('post'));
    }

    public function update($id) {
        if(isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];

            $data = array(
                'title' => $title,
                'content' => $content,
            );
            $db = new Post();

            try {
                $db->updatePost($data, $id);
                $success = "Đã sửa post thành công";
                redirect("Admin/post/index", compact('success'));
            }catch (\Exception $e){
                $error = "Đã xảy ra lỗi";
                returnURL("Admin/post/edit", compact('error'));
            }
        }else {
            $db = new Post();
            $error = 'Đã xảy ra lỗi về submit form';
            returnURL("Admin/post/edit", compact('error'));
        }
        }

    public function delete($id) {
        $db = new Post();
        try {
            $db->deletePost($id);
            $success = 'Đã xóa post thành công';
            redirect('Admin/post/index', compact('success'));
        }catch (Exception $e) {
            $error = 'Đã xảy ra lỗi';
            returnURL('Admin/post/index',  compact('error'));
        }
    }
 }