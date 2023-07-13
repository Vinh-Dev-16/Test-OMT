<?php
$titlePage = "Sửa role User";
require_once VIEW.'Admin/design/Navbar.php';

?>
<div class="container main-admin h-screen overflow-y-lg-auto flex-grow-1">
    <?php
    require_once VIEW. 'Admin/design/Header.php';
    ?>
    <nav aria-label="breadcrumb ml-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php url('User/home/index'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php url('User/Auth/index'); ?>">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Role User</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 col-sm-6">

            <?php
            if(isset($error)):
                ?>
                <h3 class="alert alert-danger text-center"><?php echo $error?></h3>
            <?php endif; ?>
            <?php foreach ($users as $item) : ?>
                <form method="post" action="<?php url('Admin/user/update/'. $item->id) ?>">
                    <div class="form-group my-2">
                        <label class="mb-1" for="exampleInputTitle">Role User</label>
                        <select class="form-control" name="role">
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                        </select>
                    </div>
                    <?php
                    if(isset($role)):
                        ?>
                        <p class="text-danger my-2"><?php echo $role?></p>
                    <?php endif; ?>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php
require_once VIEW.'Admin/design/Footer.php';
?>


