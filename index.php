<?php

require_once 'core/config.php';

function dd($data = 0){
    var_dump($data);
    die;
}

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

use core\Router;

$router = new Router;

