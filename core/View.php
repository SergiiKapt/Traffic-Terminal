<?php

namespace core;

class View
{
    protected $data;

    public function render($path, $data, $title)
    {
        $this->data = $data;
        require_once 'views/header.php';
        require_once "views/{$path}.php";
        require_once 'views/footer.php';

        exit;
    }

    public function redirect($url)
    {
        header('location: ' . $url);
        exit;
    }

}


