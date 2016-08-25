<?php

namespace App\Controllers;
use App\Models\ResumeModel;

class Home
{
    public function __construct(Views $views, ResumeModel $resume_model)
    {
        $this->viewer = $views;
        $this->resume = $resume_model->getInfo();
    }
    public function index()
    {
        $this->viewer->render("home", $this->resume);
    }
}
