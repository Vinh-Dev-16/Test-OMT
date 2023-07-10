
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <title>Đăng Nhập</title>
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <?php
                        if(isset($_SESSION['message'])):
                            ?>
                            <h3 class="alert alert-danger text-center"><?php echo $_SESSION['message']?></h3>
                        <?php endif;

                            session_unset();
                            session_destroy();
                        ?>


<!--                        --><?php
//                        if(isset($error)):
//                            ?>
<!--                            <h3 class="alert alert-danger text-center">--><?php //echo $error?><!--</h3>-->
<!--                        --><?php //endif;
//                        ?>
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng Nhập</p>

                                <form class="mx-1 mx-md-4" method="post" action="<?php url('User/auth/doLogin'); ?>">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <svg class="mb-4 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z"></path></svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example3c" name="name" class="form-control" />
                                            <label class="form-label" for="form3Example3c">Tên đăng nhập</label>
                                            <?php
                                            if(isset($name)):
                                                ?>
                                                <p class="text-danger"><?php echo $name?></p>
                                            <?php endif; ?>
                                        </div>

                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <svg class="mb-4 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28"><path d="M12.917 13C12.441 15.8377 9.973 18 7 18C3.68629 18 1 15.3137 1 12C1 8.68629 3.68629 6 7 6C9.973 6 12.441 8.16229 12.917 11H23V13H21V17H19V13H17V17H15V13H12.917ZM7 16C9.20914 16 11 14.2091 11 12C11 9.79086 9.20914 8 7 8C4.79086 8 3 9.79086 3 12C3 14.2091 4.79086 16 7 16Z"></path></svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" name="password" class="form-control" />
                                            <label class="form-label" for="form3Example4c">Password</label>
                                            <?php
                                            if(isset($password)):
                                                ?>
                                                <p class="text-danger"><?php echo $password?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" name="submit" class="btn btn-primary ">Đăng nhập</button>
                                    </div>

                                </form>
                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <span>Bạn đã có tài khoản?</span>
                                    <span class="ms-2">
                                      <a href="<?php url('User/auth/register'); ?>">Đăng kí</a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://th.bing.com/th/id/OIP.FVIxoUMAGvsCV0kl0C1G-AHaF-?pid=ImgDet&w=1000&h=806&rs=1"
                                     class="img-fluid" alt="Register imnage">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" ></script>

</body>
</html>