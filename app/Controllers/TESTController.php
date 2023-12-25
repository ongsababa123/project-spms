<?php

namespace App\Controllers;

use App\Models\UserTempModels;
use App\Models\UserModels;
use App\Models\FileModels;
use App\Models\ProjectModels;
use App\Models\TK01_Models;
use App\Models\TK02_Models;
use App\Models\TK03_Models;
use App\Models\TK04_Models;
use App\Models\TK05_Models;
use App\Models\TESTModels;
use CodeIgniter\I18n\Time;

class TESTController extends BaseController
{


    public function create_test()
    {
        helper(['form']);
        $type = $this->request->getVar('type_test');
        if ($type == '1' || $type == '2') {
            $check = $this->create_test_type1_2();
        } else if ($type == '3') {
            $check = $this->create_test_type3();
        }

        $response = [
            'success' => $check,
            'message' => $check ? 'เสร็จสิ้น' : 'ไม่สามารถบันทึกได้',
            'reload' => $check,
        ];

        return $this->response->setJSON($response);
    }

    function create_test_type1_2()
    {
        $TESTModels = new TESTModels();
        $data = [
            'id_project' => $this->request->getVar('project_select'),
            'type_test' => $this->request->getVar('type_test'),
            'location' => $this->request->getVar('location'),
            'date_test' => $this->request->getVar('day_test_value'),
            'time_test' => $this->request->getVar('time_test_value'),
            'status_test' => 1
        ];
        $check = $TESTModels->insert($data);
        return $check;
    }

    function create_test_type3()
    {
        $TESTModels = new TESTModels();

        $email_director1 = $this->request->getVar('name_teacher_1');
        $email_director2 = $this->request->getVar('name_teacher_2') ?: null;

        if ($email_director1) {
            $data = [
                'id_project' => $this->request->getVar('project_select'),
                'email_director1' => $email_director1,
                'email_director2' => $email_director2,
                'type_test' => $this->request->getVar('type_test'),
                'location' => $this->request->getVar('location'),
                'date_test' => $this->request->getVar('day_test_value'),
                'time_test' => $this->request->getVar('time_test_value'),
                'status_test' => 1
            ];

            return $TESTModels->insert($data);
        }

        return false;
    }

}

