<?php
$titlePage = "Sửa post";
require_once VIEW.'Admin/design/Navbar.php';
?>

<div class="container main-admin">
    <?php
    require_once VIEW. 'Admin/design/Header.php';
    ?>
    <nav aria-label="breadcrumb ml-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php url('User/home/home'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php url('Admin/post/index'); ?>">Post</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 col-sm-6">

            <?php
            if(isset($error)):
                ?>
                <h3 class="alert alert-danger text-center"><?php echo $error?></h3>
            <?php endif; ?>
            <?php foreach ($post as $item) : ?>
            <form method="post" action="http://localhost/omt/Admin/post/update/<?php echo $item->id ?> ">
                <div class="form-group my-2">
                    <label for="exampleInputTitle">Tiêu đề bài đăng</label>
                    <input type="text" class="form-control" value="<?php echo $item->title ?>" id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Viết tiêu đề " name="title">
                </div>
                <?php
                if(isset($title)):
                    ?>
                    <p class="text-danger my-2"><?php echo $title?></p>
                <?php endif; ?>
                <div class="form-group my-2">
                    <label for="exampleInputTitle">Link ảnh</label>
                    <input type="text" value="<?php echo $item->image  ?>" class="form-control" id="exampleInputTitle"  placeholder="Link ảnh  " name="image">
                </div>
                <?php
                if(isset($image)):
                    ?>
                    <p class="text-danger my-2"><?php echo $image?></p>
                <?php endif; ?>
                <div class="form-group my-2">
                    <input type="text" hidden="hidden" value="<?php echo $item->author ?>" class="form-control" id="exampleInputTitle"  name="author">
                </div>
                <div class="form-group my-2">
                    <label for="exampleInputTitle">Category</label>
                    <select class="form-control"  id="exampleInputTitle" name="category_id" >
                        <?php foreach ($categories as $value): ?>
                            <option
                                    <?php  if ($item->category_id == $value->id):?>
                                    selected
                                    <?php endif; ?>
                                    value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
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
                    <input class="form-control" value="<?php echo $item->content ?>" name="content" id="exampleInputContent" placeholder="Viết nội dung" rows="3"></input>
                </div>
                <?php
                if(isset($content)):
                    ?>
                    <p class="text-danger my-2"><?php echo $content?></p>
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
