<?php

namespace App\Controllers;

class TimelistController extends BaseController
{
    public function index_time()
    {
        echo view('layout/header');
        echo view('time_list');
    }

}

