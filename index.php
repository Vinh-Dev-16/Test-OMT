<?php


require_once __DIR__ . '/vendor/autoload.php';

const DS = DIRECTORY_SEPARATOR;
const ROOT_PATH = __DIR__ . DS;
const SRC = ROOT_PATH . 'src' . DS;
const CONTROLLER = SRC . 'Controllers' . DS;
const CONFIG = SRC . 'Config' . DS;
const HELPER = SRC . 'Helpers' . DS;
const MODEL = SRC . 'Models' . DS;
const PUBLIC_SRC = SRC . 'Public' . DS;
const VIEW = SRC . 'Views' . DS;


require_once (HELPER.'UrlHelper.php');
require_once (CONFIG. 'Config.php');

