
<?php
    include VIEW.'User/layout.php';

    const link_CSS = '';
?>

<br>
<div class="container">
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
