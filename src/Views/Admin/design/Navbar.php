<?php

if (!(isset($_SESSION['user']       ))){
    returnURL('User/auth/login', ['error' => 'Bạn cần phải đăng nhập']);
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
   <style>
       <?php
            require_once PUBLIC_SRC. 'CSS/Admin.css';
        ?>
   </style>
    <title><?php echo $titlePage ?></title>
</head>
<body>
    <div class="container-fluid">
        <!-- start: Sidebar -->
        <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
            <div class="d-flex align-items-center p-3">
                <svg class="ms-2 mt-2 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M12 3.09747L7.05025 8.04722C4.31658 10.7809 4.31658 15.213 7.05025 17.9467C9.78392 20.6804 14.2161 20.6804 16.9497 17.9467C19.6834 15.213 19.6834 10.7809 16.9497 8.04722L12 3.09747ZM12 0.269043L18.364 6.633C21.8787 10.1477 21.8787 15.8462 18.364 19.3609C14.8492 22.8756 9.15076 22.8756 5.63604 19.3609C2.12132 15.8462 2.12132 10.1477 5.63604 6.633L12 0.269043ZM7 12.997H17C17 15.7584 14.7614 17.997 12 17.997C9.23858 17.997 7 15.7584 7 12.997Z" fill="rgba(100,205,138,1)"></path></svg>
                <a href="#" style="color: #4cc170; margin-top: 10px !important;" class="sidebar-logo mt-4 ms-1 text-uppercase fw-bold text-decoration-none fs-3 text-bs-indigo">NEWS</a>
                <i class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5 d-none d-md-block"></i>
            </div>
            <ul class="sidebar-menu p-3 m-0 mb-0">
                <li class="sidebar-menu-item active">
                    <a href="#">
                        <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Custom</li>
                <li class="sidebar-menu-item has-dropdown">
                    <a href="#">
                        <i class="ri-pages-line sidebar-menu-item-icon"></i>
                        Pages
                        <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                    </a>
                    <ul class="ms-3 sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="<?php url('Admin/post/index'); ?>">
                               Post
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="<?php url('Admin/category/index'); ?>">
                               Category
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="<?php url('User/Auth/index'); ?>">
                                User
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item ">
                    <a href="<?php url('User/Auth/doLogOut') ?>">
                        <i class="ri-logout-box-line sidebar-menu-item-icon"></i>
                        LogOut
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-overlay"></div>


