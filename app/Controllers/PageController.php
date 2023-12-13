<?php

namespace App\Controllers;
use App\Models\NewsModels;
use App\Models\ProjectModels;

class PageController extends BaseController
{
    public function index_home()
    {
        $NewsModels = new NewsModels();
        $data['data_news'] = $NewsModels->where('status_news', 1)->findAll();

        echo view('layout/header');
        echo view('home' , $data);
    }
    //student page
    public function index_timelist_student()
    {
        echo view('layout/header');
        echo view('time_list');
    }
    public function index_projectlist()
    {
        $ProjectModels = new ProjectModels();
        $data['data_project'] = $ProjectModels->where('email_student', session()->get('email'))->findAll();

        echo view('layout/header');
        echo view('student/project_list' , $data);
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

    public function index_news_table()
    {
        echo view('layout/header');
        echo view('officer/news_table');
    }

    //admin page
    public function index_student_table()
    {
        echo view('layout/header');
        echo view('admin/student_table');
    }

    public function index_teacher_table()
    {
        echo view('layout/header');
        echo view('admin/teacher_table');
    }

    public function index_officer_table()
    {
        echo view('layout/header');
        echo view('admin/officer_table');
    }

    public function index_admin_table()
    {
        echo view('layout/header');
        echo view('admin/admin_table');
    }
}

