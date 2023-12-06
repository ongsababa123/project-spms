<?php

namespace App\Controllers;

class ConfirmationController extends BaseController
{
    public function index_confirmation()
    {
        echo view('layout/header');
        echo view('teacher/confirmation');
    }

}

