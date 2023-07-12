<?php
    $titlePage = "Tạo mới post";
    require_once VIEW.'Admin/design/Navbar.php';

?>
    <div class="container main-admin h-screen overflow-y-lg-auto flex-grow-1">
        <?php
        require_once VIEW. 'Admin/design/Header.php';
        ?>
        <nav aria-label="breadcrumb ml-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php url('User/home/index'); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php url('Admin/post/index'); ?>">Post</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Post</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 col-sm-6">

                <?php
                    if(isset($error)):
                ?>
                    <h3 class="alert alert-danger text-center"><?php echo $error?></h3>
                <?php endif; ?>
                <form method="post" action="<?php url('Admin/post/store') ?>">
                    <div class="form-group my-2">
                        <label for="exampleInputTitle">Tiêu đề bài đăng</label>
                        <input type="text" class="form-control" id="exampleInputTitle"  placeholder="Viết tiêu đề " name="title">
                    </div>
                    <?php
                    if(isset($title)):
                        ?>
                        <p class="text-danger my-2"><?php echo $title?></p>
                    <?php endif; ?>
                    <div class="form-group my-2">
                        <label for="exampleInputTitle">Link ảnh</label>
                        <input type="text" class="form-control" id="exampleInputTitle"  placeholder="Link ảnh  " name="image">
                    </div>
                    <?php
                    if(isset($image)):
                        ?>
                        <p class="text-danger my-2"><?php echo $image?></p>
                    <?php endif; ?>
                    <div class="form-group my-2">
                        <input type="text" hidden="hidden" value="<?php echo $_SESSION['user'] ?>" class="form-control" id="exampleInputTitle"  name="author">
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleInputTitle">Category</label>
                        <select class="form-control"  id="exampleInputTitle" name="category_id" >
                            <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category->id ?>"> <?php echo $category->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php
                    if(isset($category_id)):
                        ?>
                        <p class="text-danger my-2"><?php echo $category_id?></p>
                    <?php endif; ?>
                    <div class="form-group my-2">
                        <label for="exampleInputContent">Nội dung</label>
                        <textarea class="form-control" name="content" id="exampleInputContent" placeholder="Viết nội dung" rows="3"></textarea>
                    </div>
                    <?php
                    if(isset($content)):
                        ?>
                        <p class="text-danger my-2"><?php echo $content?></p>
                    <?php endif; ?>


                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<?php
require_once VIEW.'Admin/design/Footer.php';
?>