<?php

namespace App;

/**
 * Router class
 */
class Routes
{
    protected $routes = [];

    public function add($url, $params)
    {
        $this->params[$url] = $params;
    }    

    public function showRoutes()
    {
        return $this->params;   
    }

    public function dispatch($url)
    {
        $controller = "App\Controllers\\" . $this->params[$url]['controller'];
        $dependency = "App\Controllers\\" . $this->params[$url]['dep'];
        $model = "App\Models\\" . $this->params[$url]['model'];

        if($this->params[$url]){
            
            if(class_exists($controller)){

                if($dependency){
                    $dep_instance = new $dependency;
                    
                    if($model){
                        $model = new $model;
                        $class = new $controller($dep_instance, $model);
                    } else {
                        $class = new $controller($dep_instance);
                    }
                } else {
                    $class = new $controller;
                }
            }

            $action = $this->params[$url]['action'];

            if(is_callable($class->$action())){
                $class->$action();
            }
                
        } else {
            echo "Class not found";
        }
    }
}
