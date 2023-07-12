<?php
$titlePage = "Sửa category";
require_once VIEW.'Admin/design/Navbar.php';

?>
<div class="container main-admin h-screen overflow-y-lg-auto flex-grow-1">
    <?php
    require_once VIEW. 'Admin/design/Header.php';
    ?>
    <nav aria-label="breadcrumb ml-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php url('User/home/index'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php url('Admin/category/index'); ?>">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 col-sm-6">

            <?php
            if(isset($error)):
                ?>
                <h3 class="alert alert-danger text-center"><?php echo $error?></h3>
            <?php endif; ?>
            <?php foreach ($category as $item) : ?>
            <form method="post" action="<?php url('Admin/category/update/'. $item->id) ?>">
                <div class="form-group my-2">
                    <label class="mb-1" for="exampleInputTitle">Tên category</label>
                    <input type="text" value="<?php echo $item->name ?>" class="form-control" id="exampleInputTitle"  placeholder="Tên category " name="name">
                </div>
                <?php
                if(isset($name)):
                    ?>
                    <p class="text-danger my-2"><?php echo $name?></p>
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

