<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    <?php
        require_once PUBLIC_SRC . 'CSS/style.css';
    ?>
    </style>

    <!--    CDN boostraps-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    
    <title><?php echo $titlePage ?></title>
</head>

    <div class=" header-home">
        <div class="navbar-link container d-flex gap-4 align-items-center">
           <a href="#" class="navbar-link-product" target="_blank">GameK</a>
           <a href="#" class="navbar-link-product" target="_blank">Kênh 14</a>
           <a href="#" class="navbar-link-product" target="_blank">Product</a>
        </div>

        <div class="middle-navbar container-fluid">
            <div class=" middle-navbar-item container ">
                <div class="row">
                     <div class="middle-navbar-item-logo mt-3 col-md-2">
                        <svg class="ms-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M12 3.09747L7.05025 8.04722C4.31658 10.7809 4.31658 15.213 7.05025 17.9467C9.78392 20.6804 14.2161 20.6804 16.9497 17.9467C19.6834 15.213 19.6834 10.7809 16.9497 8.04722L12 3.09747ZM12 0.269043L18.364 6.633C21.8787 10.1477 21.8787 15.8462 18.364 19.3609C14.8492 22.8756 9.15076 22.8756 5.63604 19.3609C2.12132 15.8462 2.12132 10.1477 5.63604 6.633L12 0.269043ZM7 12.997H17C17 15.7584 14.7614 17.997 12 17.997C9.23858 17.997 7 15.7584 7 12.997Z" fill="rgba(100,205,138,1)"></path></svg>
                        <a href="#" style="color: #4cc170; margin-top: 10px !important;" class="sidebar-logo mt-4 ms-1 text-uppercase fw-bold text-decoration-none fs-3 text-bs-indigo">NEWS</a>
                      </div>
                     <div class="col-md-5 mt-3">
                         <div class="trending-icon">
                             <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_2_588)">
                                     <path d="M7.71094 6.06641L11.6953 10.0508L17.4141 4.35547L19.7109 6.65234V0.652344H13.7109L16.0078 2.92578L11.6953 7.23828L7.71094 3.23047L0 10.9414L1.40625 12.3477L7.71094 6.06641Z" fill="white"></path>
                                 </g>
                                 <defs>
                                     <clipPath id="clip0_2_588">
                                         <rect width="19.7109" height="11.6953" fill="white" transform="translate(0 0.652344)"></rect>
                                     </clipPath>
                                 </defs>
                             </svg>
                         </div>

                         <div class="ms-5 button-middle-navbar ">
                             <button type="button" class="btn button-middle-navbar-item"># Tech Kiệm</button>
                             <button type="button" class="btn button-middle-navbar-item"># Smart Buy</button>
                         </div>
                     </div>
                    <div class="col-md-5 mt-3 d-flex justify-content-center align-items-center position-relative">
                        <input  id="input-search-navbar" type="search" class="form-control position-absolute end-12" placeholder="Search">
                        <svg class="position-absolute end-5 " id="search-navbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z" fill="rgba(255,255,255,1)"></path></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="horizon">
        </div>

        <div class="end-navbar">
            <div class="container position-relative">
                <div class="row"">
                    <div class="col-md-8 d-flex mt-2 justify-content-left align-items-center gap-5">
                        <?php foreach ($categories as $category): ?>
                        <a href="#"  class="end-navbar-item" target="_blank"><?php echo $category->name ?></a>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-md-3 mt-2">
                            <div class="end-navbar-item-bar ">
                            <svg class="position-absolute  end-navbar-item-bar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3 4H21V6H3V4ZM3 19H21V21H3V19ZM3 14H21V16H3V14ZM3 9H21V11H3V9Z" fill="rgba(255,255,255,1)"></path></svg>
                             <div class="position-absolute end-navbar-dropdown">
                                <div class="container d-flex justify-content-center align-items-center gap-2">
                                    <p>aaaaDĐ</p>
                                    <p>aaaaDĐ</p>
                                    <p>aaaaDĐ</p>
                                    <p>aaaaDĐ</p>
                                    <p>aaaaDĐ</p>
                                    <p>aaaaDĐ</p>
                                    <p>aaaaDĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


