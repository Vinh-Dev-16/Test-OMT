<?php

const BASE_URL = 'http://localhost/omt/';

// Redirect controller

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