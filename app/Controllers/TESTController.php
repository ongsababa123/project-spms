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
        $email_director2 = $this->request->getVar('name_teacher_2');

        if ($email_director1 && $email_director2) {
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

    public function get_data_test_type1($date = null, $time = null, $type = null)
    {
        $TESTModels = new TESTModels();
        $UserModels = new UserModels();
        $ProjectModels = new ProjectModels();

        $data['test_type1'] = $TESTModels->where('type_test', $type)->where('date_test', $date)->where('time_test', $time)->findAll();
        foreach ($data['test_type1'] as $key => $value) {
            $data['test_type1'][$key]['project'] = $ProjectModels->where('id_project', $value['id_project'])->first();
            $email_students = explode(',', $data['test_type1'][$key]['project']['email_student']);
            foreach ($email_students as $key2 => $value2) {
                $data['test_type1'][$key]['students'][$key2] = $UserModels->where('email_user', $value2)->first();
            }
            $data['test_type1'][$key]['teachers'] = $UserModels->where('email_user', $data['test_type1'][$key]['project']['email_teacher'])->first();
            if ($type == '3') {
                $data['test_type1'][$key]['chairman'] = $UserModels->where('email_user', $value['email_director1'])->first();
                $data['test_type1'][$key]['director'] = $UserModels->where('email_user', $value['email_director2'])->first();
            }
        }
        return $this->response->setJSON($data);
    }
    public function get_data_test_type_student($type = null)
    {
        // Model Dependency Injection in the constructor
        $TESTModels = new TESTModels();
        $UserModels = new UserModels();
        $ProjectModels = new ProjectModels();

        $email = session()->get('email');
        $num = 0;
        $data['test_list'] = $TESTModels->where('type_test', $type)->findAll();

        foreach ($data['test_list'] as &$test) {
            $test['project'] = $ProjectModels->find($test['id_project']);
            $email_students = explode(',', $test['project']['email_student']);

            $test['students'] = $UserModels->whereIn('email_user', $email_students)->findAll();
            $test['teachers'] = $UserModels->where('email_user', $test['project']['email_teacher'])->first();

            if ($type == '3') {
                $test['chairman'] = $UserModels->where('email_user', $test['email_director1'])->first();
                $test['director'] = $UserModels->where('email_user', $test['email_director2'])->first();
            }

            if (in_array($email, $email_students)) {
                $data['data_test_'][$num++] = $test;
            }
        }
        if (!isset($data['data_test_'])) {
            $data['data_test_'] = false;
        }
        return $this->response->setJSON($data['data_test_']);
    }

    public function get_data_test_type_teacher($type = null)
    {
        // Model Dependency Injection in the constructor
        $TESTModels = new TESTModels();
        $UserModels = new UserModels();
        $ProjectModels = new ProjectModels();

        $email = session()->get('email');
        $num = 0;
        $data['test_list'] = $TESTModels->where('type_test', $type)->findAll();

        foreach ($data['test_list'] as &$test) {
            $test['project'] = $ProjectModels->find($test['id_project']);
            $email_students = explode(',', $test['project']['email_student']);

            $test['students'] = $UserModels->whereIn('email_user', $email_students)->findAll();
            $test['teachers'] = $UserModels->where('email_user', $test['project']['email_teacher'])->first();

            if ($type === '3') {
                $test['chairman'] = $UserModels->where('email_user', $test['email_director1'])->first();
                $test['director'] = $UserModels->where('email_user', $test['email_director2'])->first();
            }

            if ($email === $test['project']['email_teacher']) {
                $data['data_test_'][$num++] = $test;
            }
        }
        if (!isset($data['data_test_'])) {
            $data['data_test_'] = false;
        }
        return $this->response->setJSON($data['data_test_']);
    }


    public function delete_test($id_test_list = null)
    {

        $TESTModels = new TESTModels();
        $check = $TESTModels->where('id_test_list', $id_test_list)->delete();
        $response = [
            'success' => $check,
            'message' => $check ? 'ยกเลิกเสร็จสิ้น' : 'ไม่สามารถยกเลิกได้',
            'reload' => $check,
        ];
        return $this->response->setJSON($response);
    }

    public function change_status($id_test_list = null, $status = null, $type = null)
    {

        $TESTModels = new TESTModels();
        $ProjectModels = new ProjectModels();
        $TK02_Models = new TK02_Models();
        $TK03_Models = new TK03_Models();
        $TK05_Models = new TK05_Models();
        if ($status == '2') {
            $status_tk = '6';
        } else if ($status == '3') {
            $status_tk = '3';
        }
        $project_id = $ProjectModels->find($TESTModels->find($id_test_list)['id_project']);
        $data_project = $ProjectModels->find($project_id);
        if ($type == '1') {
            $TK02_Models->update($data_project[0]['id_tk02'], ['status_tk_02' => $status_tk]);
        } elseif ($type == '2') {
            $id_tk03 = $TK03_Models->find($ProjectModels->find($project_id)['id_tk_03']);
            $TK03_Models->update($id_tk03[0]['id_tk03'], ['status_tk_03' => $status_tk]);
        } elseif ($type == '3') {
            $id_tk05 = $TK05_Models->find($ProjectModels->find($project_id)['id_tk_05']);
            $TK05_Models->update($id_tk05[0]['id_tk05'], ['status_tk_05' => $status_tk]);
        }


        $check = $TESTModels->update($id_test_list, ['status_test' => $status]);
        $response = [
            'success' => $check,
            'message' => $check ? 'ดำเนินการเสร็จสิ้น' : 'ไม่สามารถดำเนินการได้',
            'reload' => $check,
        ];

        return $this->response->setJSON($response);
    }

}

