
<?php
$titlePage = "Danh sách user";
require_once VIEW.'Admin/design/Navbar.php';
?>

<div class="container main-admin h-screen overflow-y-lg-auto flex-grow-1">
    <?php
    require_once VIEW. 'Admin/design/Header.php';
    ?>

    <nav aria-label="breadcrumb breadcrumb-admin">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php url('User/home/home'); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">List User</li>
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



    <table class="table table-striped display mt-3" id="myTable" >
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <th scope="row"><?php echo $user->id ?></th>
                <td><?php echo $user->name ?></td>
                <td><?php echo $user->email ?></td>
                <td>
                    <a class="btn btn-secondary btn-rounded" href="<?php url('User/auth/edit/' . $user->id); ?>">Sửa role</a>
                    <a onclick="return confirm('Bạn muốn xóa chứ?')" class="btn btn-danger btn-rounded ms-3" href="<?php url('Admin/user/delete/' . $user->id) ; ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
require_once VIEW.'Admin/design/Footer.php';
?>
