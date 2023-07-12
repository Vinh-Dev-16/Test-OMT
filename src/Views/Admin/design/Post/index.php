
<?php
$titlePage = "Danh sách post";
require_once VIEW.'Admin/design/Navbar.php';
?>

    <div class="container main-admin h-screen overflow-y-lg-auto flex-grow-1">
        <?php
            require_once VIEW. 'Admin/design/Header.php';
        ?>

        <nav aria-label="breadcrumb breadcrumb-admin">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php url('User/home/home'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Post</li>
            </ol>
        </nav>
        <!--  Message success      -->

        <?php
        if(isset($_SESSION['message'])):

            ?>
            <h3 class="alert alert-success text-center"><?php echo $_SESSION['message']?></h3>
        <?php
            endif;
            unset($_SESSION['message']);
        ?>

        <!--  Message error      -->
        <?php
        if(isset($error)):
            ?>
            <h3 class="alert alert-success text-center"><?php echo $error?></h3>
        <?php endif; ?>


        <a class="mb-2 mt-2 btn btn-info btn-rounded" href="<?php url('Admin/post/create'); ?>"> Tạo mới bài đăng</a>

        <table class="table table-striped display mt-3" id="myTable" >
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th  scope="col">Content</th>
            <th  scope="col">Category</th>
            <th  scope="col">Tác giả</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($posts as $post): ?>
        <tr>
            <th scope="row"><?php echo $post->id ?></th>
            <td><?php echo mb_substr($post->title , 0,30)?></td>
            <td><?php echo mb_substr($post->content , 0,30)  ?></td>
            <td><?php echo $post->category_name ?></td>
            <td><?php echo $post->author ?></td>
            <td>
                <a class=" btn btn-secondary btn-rounded" href="<?php url('Admin/post/edit/' . $post->id); ?>">Sửa</a>
                <a onclick="return confirm('Bạn muốn xóa chứ?')" class="ms-3 btn btn-danger btn-rounded" href="<?php url('Admin/post/delete/' . $post->id) ; ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>

<?php
require_once VIEW.'Admin/design/Footer.php';
?>