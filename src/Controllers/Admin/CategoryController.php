<?php

namespace Thinkpad\Omt\Controllers\Admin;

use Exception;
use Thinkpad\Omt\Models\Category;

class CategoryController
{
    public function index() {
        $db = new Category();
        $categories = $db->getAllCategory();
        loadView('Admin/design/Category/index.php', compact('categories'));
    }

    public function create()
    {
        view('Admin/design/Category/create.php');
    }

    public function store() {

        if (isset($_POST['submit'])){
           if(!empty($_POST['$name'])) {
               loadView('Admin/design/Category/create.php' ,['error' => 'Không được để trống trường này']);
           } else {
               $name  = $_POST['name'];
               $data = array(
                   'name' => $name,
               );
               $db = new Category();
               try {
                   $db->insertCategory($data);
                   $success = 'Đã thêm category thành công';
                   redirect('Admin/category/index', compact( 'success' ));
               }catch (Exception $e) {
                   $error = $e->getMessage();
                   returnURL('Admin/design/Category/create', compact('error'));
               }
           }
        }else {
            echo 'Không nhận được ô submit';
        }
    }

    public function edit ($id) {
        $db = new Category();
        $category =  $db->getOneCategory($id);
        loadView("Admin/design/Category/edit.php", compact('category'));
    }

    public function update ($id) {
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];

            $data = array(
                'name' => $name,
            );
            $db = new Category();

            try {
                $db->updateCategory($data, $id);
                $success = "Đã sửa post thành công";
                redirect("Admin/category/index", compact('success'));
            }catch (\Exception $e){
                $error = "Đã xảy ra lỗi";
                returnURL("Admin/category/edit", compact('error'));
            }
        }else {
            $error = 'Đã xảy ra lỗi về submit form';
            returnURL("Admin/post/edit", compact('error'));
        }
    }

    public function delete($id)
    {
        $db = new Category();
        try {
            $db->deleteCategory($id);
            $success = 'Đã xóa category thành công';
            redirect('Admin/category/index', compact('success'));
        } catch (Exception $e) {
            $error = 'Đã xảy ra lỗi';
            returnURL('Admin/category/index', compact('error'));
        }
    }
}