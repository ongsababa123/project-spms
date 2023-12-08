<?php

namespace App\Controllers;

class ScoresubmitController extends BaseController
{
    public function index_scoresubmit()
    {
        echo view('layout/header');
        echo view('teacher/scoresubmit');
    }

}

