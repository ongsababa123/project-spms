<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function index_home()
    {
        echo view('layout/header');
        echo view('home');
    }
    //student page
    public function index_timelist_student()
    {
        echo view('layout/header');
        echo view('time_list');
    }
    public function index_projectlist()
    {
        echo view('layout/header');
        echo view('student/project_list');
    }

    public function index_testlist()
    {
        echo view('layout/header');
        echo view('student/test_list');
    }

    //teacher page
    public function index_timelist_teacher()
    {
        echo view('layout/header');
        echo view('time_list');
    }
    public function index_submitpage()
    {
        echo view('layout/header');
        echo view('teacher/project_submit');
    }

    public function index_progress()
    {
        echo view('layout/header');
        echo view('teacher/project_progress');
    }

    public function index_scorepage()
    {
        echo view('layout/header');
        echo view('teacher/scorepage_ex');
    }

    public function index_testlist_teacher()
    {
        echo view('layout/header');
        echo view('teacher/test_list_teacher');
    }

    //officer page
    public function index_testtime()
    {
        echo view('layout/header');
        echo view('officer/time_test_list');
    }
    public function index_history_test()
    {
        echo view('layout/header');
        echo view('officer/history_test');
    }

    public function index_project_request()
    {
        echo view('layout/header');
        echo view('officer/project_request');
    }
}

