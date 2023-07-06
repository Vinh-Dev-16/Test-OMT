<?php


require_once __DIR__ . '/vendor/autoload.php';
function loadView($path, $params)
{
    extract($params);
    require_once 'src/Views/' . $path;
}


function view( $path)
{
    require_once 'src/Views/' . $path;
}

if (isset($_GET['ct'])) {
    $ct = $_GET['ct'];
    $ctArr = explode('/', $ct);
    $className = 'Thinkpad\Omt\Controllers\\' . ucfirst($ctArr[0]) .'\\' . ucfirst($ctArr[1]) . 'Controller';
    $objOfController = new $className;

    if (empty($ctArr[3])){
        $objOfController->{$ctArr[2]}();
    }else {
        $objOfController->{$ctArr[2]}($ctArr[3]);
    }
}
