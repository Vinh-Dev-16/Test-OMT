<?php


if (!(isset($_SESSION['user']))){
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
       <div class="sidebar position-fixed top-0 start-0 bottom-0 bg-light border-end">
           <div class="d-flex align-items ms-auto fs-5">
               <svg class="ms-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M12 3.09747L7.05025 8.04722C4.31658 10.7809 4.31658 15.213 7.05025 17.9467C9.78392 20.6804 14.2161 20.6804 16.9497 17.9467C19.6834 15.213 19.6834 10.7809 16.9497 8.04722L12 3.09747ZM12 0.269043L18.364 6.633C21.8787 10.1477 21.8787 15.8462 18.364 19.3609C14.8492 22.8756 9.15076 22.8756 5.63604 19.3609C2.12132 15.8462 2.12132 10.1477 5.63604 6.633L12 0.269043ZM7 12.997H17C17 15.7584 14.7614 17.997 12 17.997C9.23858 17.997 7 15.7584 7 12.997Z" fill="rgba(100,205,138,1)"></path></svg>
               <a href="#" class="sidebar-logo mt-2 ms-1 text-uppercase fw-bold text-decoration-none fs-3 text-bs-indigo">NEWS</a>
               <svg class="sidebar-toggle mt-3 me-1 ms-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z" fill="rgba(150,218,183,1)"></path></svg>
           </div>

           <ul class="sidebar-menu p-3 mt-2 mb-0">
               <li class="sidebar-menu-item active">
                   <a href="#">
                       <svg class="mb-1 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M11.001 5H5.00098V11H11.001V5ZM13.001 5V11H19.001V5H13.001ZM19.001 13H13.001V19H19.001V13ZM11.001 19V13H5.00098V19H11.001ZM3.00098 3H21.001V21H3.00098V3Z"></path></svg>
                       Dashboard
                   </a>
               </li>
               <li class="sidebar-menu-divider text-uppercase mt-3 mb-1">Custom</li>
               <li class="sidebar-menu-item has-dropdown">
                   <a href="#">
                       <svg class="mb-1 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M17 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H7V0H9V2H15V0H17V2ZM17 4V6H15V4H9V6H7V4H5V20H19V4H17ZM7 8H17V10H7V8ZM7 12H17V14H7V12Z"></path></svg>
                       Item
                       <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                   </a>
                   <ul class="sidebar-dropdown-menu">
                       <li class="sidebar-dropdown-menu-item">
                           <a href="<?php url('Admin/post/index'); ?>">
                               List Post
                           </a>
                       </li>
                       <li class="sidebar-dropdown-menu-item">
                           <a href="<?php url('Admin/category/index'); ?>">
                               List Category
                           </a>
                       </li>
                       <li class="sidebar-dropdown-menu-item">
                           <a href="<?php url('Admin/user/index'); ?>">
                               List User
                           </a>
                       </li>
                   </ul>
               </li>
               <li class="sidebar-menu-item">
                   <a href="<?php url('User/auth/doLogOut'); ?>">
                       <svg class="mb-1 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M4 18H6V20H18V4H6V6H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V18ZM6 11H13V13H6V16L1 12L6 8V11Z"></path></svg>
                       Logout
                   </a>
               </li>
           </ul>
       </div>


