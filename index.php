<?php

spl_autoload_register(function ($class){
    $root = dirname(__FILE__);
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if(is_readable($file)) {
        require $file;
    }
});

$router = new \App\Routes;

$router->add('', [  'controller' => 'Home', 
                    'action' => 'index', 
                    'dep' => 'Views', 
                    'model' =>'ResumeModel'
                ]);

$router->dispatch($_SERVER["QUERY_STRING"]);
