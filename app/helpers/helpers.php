<?php

use League\Plates\Engine;


function view(string $view, $data = [])
{
    $path = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'views';
    $templates = new Engine($path);
    echo $templates->render($view, $data);
}
