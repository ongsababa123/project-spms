<?php

namespace App\Controllers;

use App\Models\NewsModels;
use App\Models\ProjectModels;
use App\Models\UserTempModels;
use App\Models\UserModels;
use App\Models\TK01_Models;
use App\Models\TK02_Models;
use App\Models\TK03_Models;
use App\Models\TK04_Models;
use App\Models\TK05_Models;

class PageController extends BaseController
{
    public function index_home()
    {
        $NewsModels = new NewsModels();
        $data['data_news'] = $NewsModels->where('status_news', 1)->findAll();

        echo view('layout/header');
        echo view('home', $data);
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
        $UserModels = new UserModels();

        $data['data_user'] = $UserModels->where('email_user', session()->get('email'))->findAll();
        $data['data_teacher'] = $UserModels
            ->where('type_user', 2)
            ->where('status_user', 2)
            ->orWhere('status_user', 1)
            ->findAll();
        foreach ($data['data_teacher'] as $key => $value) {
            $data['data_teacher'][$key]['project_count'] = $ProjectModels
                ->where('email_teacher', $value['email_user'])
                ->where('status_project', 1)
                ->countAllResults();
        }
        echo view('layout/header');
        echo view('student/project_list', $data);
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
        $ProjectModels = new ProjectModels();
        $TK01_Models = new TK01_Models();
        $TK02_Models = new TK02_Models();
        $TK03_Models = new TK03_Models();
        $TK04_Models = new TK04_Models();
        $TK05_Models = new TK05_Models();
        $UserModels = new UserModels();
        $UserTempModels = new UserTempModels();
        $data['data_project'] = $ProjectModels->where('status_project', 1)->findAll();

        foreach ($data['data_project'] as $key => $value) {
            $data['data_project_tk'][$key]['data_tk01'] = $TK01_Models->where('id_tk_01', $value['id_tk01'])->where('status_tk_01', 2)->first();
            $data['data_project_tk'][$key]['data_tk02'] = $TK02_Models->where('id_tk_02', $value['id_tk02'])->where('status_tk_02', 2)->first();
            $data['data_project_tk'][$key]['data_tk03'] = $TK03_Models->where('id_tk_03', $value['id_tk03'])->where('status_tk_03', 2)->first();
            $data['data_project_tk'][$key]['data_tk04'] = $TK04_Models->where('id_tk_04', $value['id_tk04'])->where('status_tk_04', 2)->first();
            $data['data_project_tk'][$key]['data_tk05'] = $TK05_Models->where('id_tk_05', $value['id_tk05'])->where('status_tk_05', 2)->first();
            if ($data['data_project_tk'][$key]['data_tk01'] != null || $data['data_project_tk'][$key]['data_tk02'] != null || $data['data_project_tk'][$key]['data_tk03'] != null || $data['data_project_tk'][$key]['data_tk04'] != null || $data['data_project_tk'][$key]['data_tk05'] != null) {
                $data['data_project_tk'][$key]['data_teacher'] = $UserModels->where('email_user', $value['email_teacher'])->first();
                $data['data_project_tk'][$key]['data_teacher']['project_count'] = $ProjectModels
                    ->where('email_teacher', $value['email_teacher'])
                    ->where('status_project', 1)
                    ->countAllResults();

                $email_students = explode(',', $value['email_student']);
                foreach ($email_students as $index => $email) {
                    $data['data_project_tk'][$key]['data_student'][$index] = $UserTempModels->where('email_user', $email)->first();
                    if ($data['data_project_tk'][$key]['data_student'][$index] == null) {
                        $data['data_project_tk'][$key]['data_student'][$index] = $UserModels->where('email_user', $email)->first();
                    }
                }
                $data['data_project_tk'][$key]['data_project'] = $value;
            }
        }
        echo view('layout/header');
        echo view('officer/project_request', $data);
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

