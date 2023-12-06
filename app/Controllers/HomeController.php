<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index_student()
    {
        echo view('layout/header');
        echo view('student/home_student');
    }

    public function index_teacher()
    {
        echo view('layout/header');
        echo view('teacher/home_teacher');
    }

    public function index_officer()
    {
        echo view('layout/header');
        echo view('officer/home_officer');
    }
}

