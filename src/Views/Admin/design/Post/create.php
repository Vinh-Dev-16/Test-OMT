<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <title>Create Post</title>
</head>

<body>
    <br>
    <div class="container">
        <nav aria-label="breadcrumb ml-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php url('User/home/home'); ?>">Home</a></li>
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
                        <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Viết tiêu đề " name="title">
                    </div>
                    <?php
                    if(isset($title)):
                        ?>
                        <p class="text-danger my-2"><?php echo $title?></p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" ></script>
</body>