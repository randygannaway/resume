<?php

namespace App\Controllers;

/**
 * View controller
 */
class Views
{
    
    /**
     * Require a view file
     */
    public function render($view, $data = [])
    {
        if($data!==null){
            extract($data, EXTR_SKIP);
        }

        $file = "App/Views/" . $view . ".php";
        if(is_readable($file)){
            require $file;
        } else {
            echo "File not found";
        }
    }
}
