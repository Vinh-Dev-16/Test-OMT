<?php
 namespace Thinkpad\Omt\Controllers\Admin;

 use Exception;
 use Thinkpad\Omt\Models\Category;
 use Thinkpad\Omt\Models\Post;

 class PostController {

     public function index() {
         $postModel = new Post();
         $posts = $postModel->getPost();
         loadView("Admin/design/Post/index.php", compact('posts'));
     }

     public function create() {
         $db = new Category();
         $categories =  $db->getAllCategory();
         loadView("Admin/design/Post/create.php", compact('categories'));
     }

     public function store() {
         if(isset($_POST['submit'])) {
             $title = $_POST['title'];
             $content = $_POST['content'];
             $image = $_POST['image'];
             $category_id = $_POST['category_id'];
             $author = $_POST['author'];

             $data = array(
                 'title' => $title,
                 'content' => $content,
                 'image' => $image,
                 'category_id' => $category_id,
                 'author' => $author,
             );

             if (empty($title) && empty($content) && empty($image) && empty($category_id)) {
                 loadView('Admin/design/Post/create.php', ['error' => 'Không được để trống trường nào']);
             } else if(empty($title)) {
                 loadView('Admin/design/Post/create.php', ['title' => 'Không được để trống trường title']);
             } else if(empty($content)) {
                 loadView('Admin/design/Post/create.php', ['content' => 'Không được để trống trường content']);
             }else if(empty($image)) {
                 loadView('Admin/design/Post/create.php', ['content' => 'Không được để trống trường link ảnh']);
             }else if(empty($category_id)) {
                 loadView('Admin/design/Post/create.php', ['content' => 'Không được để trống trường category']);
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
         $database = new Category();
         $category = $database->getOneCategory($id);
         $categories  = $database->getAllCategory();
         loadView("Admin/design/Post/edit.php", compact('post', 'category' , 'categories'));
    }

    public function update($id) {
        if(isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];
            $author = $_POST['author'];

            $data = array(
                'title' => $title,
                'content' => $content,
                'image' => $image,
                'category_id' => $category_id,
                'author' => $author,
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