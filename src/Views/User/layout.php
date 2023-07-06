<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/CSS/style.css">

    <!--    CDN boostraps-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

    <title>Project OMT</title>
</head>
<body>

<header>
    <div class="link-products">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link active navbar-link-product text-primary" target="_blank" aria-current="page" href="https://omt.vn/vi/">OMT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-link-product" target="_blank" href="#" >PHP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-link-product" target="_blank" href="#">Test</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-4 position-relative">
                    <h1 class="text-center">News</h1>
                    <div class="position-absolute top-10 start-50">
                        <p>Write here</p>
                    </div>

                </div>
                <div class="col-md-1 ms-2 mt-4 col-sm-1">
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

                <div class="col-md-6 ml-2">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <div class="col-md-2 me-2 mt-2 position-relative">
                    <label class="position-absolute start-0" id="input-search-navbar">
                        <input type="search" placeholder="Tìm kiếm ở đây" />
                    </label>
                    <div class="icon-search-bar position-absolute end-0"  id="search-navbar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28"><path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z" fill="rgba(255,255,255,1)"></path></svg>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <div class="navbar-item">
                <div class="col-9">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link nav-header" target="_blank" aria-current="page" href="https://omt.vn/vi/">OMT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-header " target="_blank" href="#" >PHP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-header " target="_blank" href="#">Test</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2 position-relative">
                    <div class="bar-show">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M12 3V5H3V3H12ZM16 19V21H3V19H16ZM22 11V13H3V11H22Z" fill="rgba(255,255,255,1)"></path></svg>
                    </div>
                    <div class="item-show container-fluid position-absolute z-3 text-primary">
                        <div class="col-md-12 container">
                        <p>abc</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--    CDN boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script>
    let searchNavbar = document.querySelector('#search-navbar');
    let inputSearchNavbar = document.querySelector('#input-search-navbar');
    searchNavbar.addEventListener('click', () =>{
        inputSearchNavbar.classList.toggle('active');
    });
</script>
</body>