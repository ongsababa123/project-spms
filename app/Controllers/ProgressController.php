<?php

namespace App\Controllers;

class ProgressController extends BaseController
{
    public function index_progress()
    {
        echo view('layout/header');
        echo view('teacher/progress');
    }

}

