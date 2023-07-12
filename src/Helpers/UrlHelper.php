<?php

session_start();
function url($url = '') {
    echo BASE_URL .$url;
}


function redirect($url, $params ,$statusCode = 303 )
{
    extract($params);
    if (isset($_SESSION['message'])){
        session_unset();

        session_destroy();

        foreach ($params as $key => $value){
            $_SESSION['message'] = $value;
        }
    }else {
        foreach ($params as $key => $value){
            $_SESSION['message'] = $value;
        }
    }
    header('Location: ' . BASE_URL. $url, true, $statusCode);
    die();
}


function returnURL($url, $params ,$statusCode = 303 )
{
    extract($params);
    if (isset($_SESSION['error'])){
        session_unset();
        session_destroy();

        foreach ($params as $key => $value){
            $_SESSION['error'] = $value;
        }
    }else {
        foreach ($params as $key => $value){
            $_SESSION['error'] = $value;
        }
    }

    header('Location: ' . BASE_URL. $url, true, $statusCode);
    die();
}

function loadView($path, $params)
{
    ob_start();
    extract($params);
    require_once 'src/Views/' . $path;
    ob_end_flush();
}


function view( $path)
{
    require_once 'src/Views/' . $path;
}