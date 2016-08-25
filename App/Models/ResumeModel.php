<?php

namespace App\Models;

/**
 * Model to retreive json resume info
 */
class ResumeModel
{
    
    /**
     * Get resume info
     * @return json 
     */
    public function getInfo()
    {
        $file = dirname(__FILE__) . "/resume.json";
        $json = file_get_contents($file);
        $json_array = json_decode($json, true);
        return $json_array; 
    }

}
