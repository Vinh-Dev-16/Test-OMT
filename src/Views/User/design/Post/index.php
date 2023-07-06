<?php


?>

<header>
    <link rel="stylesheet" href="../../../../public/CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</header>
<body>

    <div class="container">

        <!--  Message success      -->

        <?php
        if(isset($success)):
            ?>
            <h3 class="alert alert-success text-center"><?php echo $success?></h3>
        <?php endif; ?>

        <!--  Message error      -->
        <?php
        if(isset($error)):
            ?>
            <h3 class="alert alert-success text-center"><?php echo $error?></h3>
        <?php endif; ?>


        <a href="http://localhost/omt/User/post/create"> Tạo mới bài đăng</a>
        <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($posts as $post): ?>
        <tr>
            <th scope="row"><?php echo $post->id ?></th>
            <td><?php echo $post->title ?></td>
            <td><?php echo $post->content ?></td>
            <td>

                <a href="<?php echo 'http://localhost/omt/User/post/delete/'.$post->id ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>


<!--    CDN boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>