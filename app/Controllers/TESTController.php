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
use App\Controllers\SendMailController;

class TESTController extends BaseController
{


    public function create_test()
    {
        $SendMailController = new SendMailController();
        helper(['form']);
        $type = $this->request->getVar('type_test');
        $check = $this->create_test_type3();

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
        $SendMailController = new SendMailController();
        $ProjectModels = new ProjectModels();

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
            $type_test = $this->request->getVar('type_test');
            $id_project = $this->request->getVar('project_select');
            $project_data = $ProjectModels->where('id_project', $id_project)->first();
            $email_student = explode(',', $project_data['email_student']);
            $email_teacher = $project_data['email_teacher'];
            $name_project = $project_data['name_project_th'];
            $subject = "ตารางสอบใหม่";
            if ($type_test == 1) {
                $text = "มีตารางสอบของโครงงาน " . $name_project . " ประเภทการสอบ สอบหัวข้อ เข้าใหม่กรุณาตรวจสอบตารางสอบ";
            } else if ($type_test == 2) {
                $text = "มีตารางสอบของโครงงาน " . $name_project . " ประเภทการสอบ สอบ 60 เข้าใหม่กรุณาตรวจสอบตารางสอบ";
            } else if ($type_test == 3) {
                $text = "มีตารางสอบของโครงงาน " . $name_project . " ประเภทการสอบ สอบ 100 เข้าใหม่กรุณาตรวจสอบตารางสอบ";
            }
            foreach ($email_student as $key => $value) {
                $SendMailController->sendMail($value, $text, $subject);
            }
            $SendMailController->sendMail($email_teacher, $text, $subject);
            $SendMailController->sendMail($email_director1, $text, $subject);
            $SendMailController->sendMail($email_director2, $text, $subject);

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
            $data['test_type1'][$key]['chairman'] = $UserModels->where('email_user', $value['email_director1'])->first();
            $data['test_type1'][$key]['director'] = $UserModels->where('email_user', $value['email_director2'])->first();
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

            $test['chairman'] = $UserModels->where('email_user', $test['email_director1'])->first();
            $test['director'] = $UserModels->where('email_user', $test['email_director2'])->first();


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

            $test['chairman'] = $UserModels->where('email_user', $test['email_director1'])->first();
            $test['director'] = $UserModels->where('email_user', $test['email_director2'])->first();


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
        $SendMailController = new SendMailController();
        $ProjectModels = new ProjectModels();

        $data_test = $TESTModels->find($id_test_list);
        $project_data = $ProjectModels->find($data_test['id_project']);
        $email_student = explode(',', $project_data['email_student']);
        $email_teacher = $project_data['email_teacher'];
        $email_director1 = $data_test['email_director1'];
        $email_director2 = $data_test['email_director2'];
        $name_project = $project_data['name_project_th'];
        $time_test = (int) $data_test['time_test'] . ".00-" . ((int) $data_test['time_test'] + 1) . ".00";
        $englishToThaiDayMapping = [
            'monday' => 'วันจันทร์',
            'tuesday' => 'วันอังคาร',
            'wednesday' => 'วันพุธ',
            'thursday' => 'วันพฤหัสบดี',
            'friday' => 'วันศุกร์',
            'saturday' => 'วันเสาร์',
            'sunday' => 'วันอาทิตย์',
        ];
        $day_test = strtolower($data_test['date_test']); // Ensure lowercase for case-insensitivity
        $day_test_thai = isset($englishToThaiDayMapping[$day_test]) ? $englishToThaiDayMapping[$day_test] : 'Invalid Day';
        $type_test = $data_test['type_test'];
        $subject = "ตารางสอบถูกยกเลิก";
        if ($type_test == 1) {
            $text = "ตารางสอบของโครงงาน " . $name_project . " ประเภทการสอบ สอบหัวข้อ " . $day_test_thai . " เวลา " . $time_test . " ถูกยกเลิก";
        } else if ($type_test == 2) {
            $text = "ตารางสอบของโครงงาน " . $name_project . " ประเภทการสอบ สอบ 60 " . $day_test_thai . " เวลา " . $time_test . " ถูกยกเลิก";
        } else if ($type_test == 3) {
            $text = "ตารางสอบของโครงงาน " . $name_project . " ประเภทการสอบ สอบ 100 " . $day_test_thai . " เวลา " . $time_test . " ถูกยกเลิก";
        }
        foreach ($email_student as $key => $value) {
            $SendMailController->sendMail($value, $text, $subject);
        }
        $SendMailController->sendMail($email_teacher, $text, $subject);
        $SendMailController->sendMail($email_director1, $text, $subject);
        $SendMailController->sendMail($email_director2, $text, $subject);

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
            $text1 = "ผ่านการสอบ";
        } else if ($status == '3') {
            $status_tk = '3';
            $text1 = "ไม่ผ่านการสอบ";
        }

        $data_test = $TESTModels->find($id_test_list);
        $data_project = $ProjectModels->find($data_test['id_project']);
        if ($type == '1') {
            $TK02_Models->update($data_project['id_tk02'], ['status_tk_02' => $status_tk]);
            $text2 = "ประเภท สอบหัวข้อ";
        } elseif ($type == '2') {
            $TK03_Models->update($data_project['id_tk03'], ['status_tk_03' => $status_tk]);
            $text2 = "ประเภท สอบ 60";
        } elseif ($type == '3') {
            $TK05_Models->update($data_project['id_tk05'], ['status_tk_05' => $status_tk]);
            $text2 = "ประเภท สอบ 100";
        }

        $SendMailController = new SendMailController();
        $email_student = explode(',', $data_project['email_student']);
        $text = "ผลการสอบของ โครงงาน " . $data_project['name_project_th'] . " " . $text1 . " " . $text2;
        $subject = "ผลการสอบ";
        foreach ($email_student as $key => $value) {
            $SendMailController->sendMail($value, $text, $subject);
        }

        $check = $TESTModels->update($id_test_list, ['status_test' => $status]);
        // $check = true;
        $response = [
            'success' => $check,
            'message' => $check ? 'ดำเนินการเสร็จสิ้น' : 'ไม่สามารถดำเนินการได้',
            'reload' => $check,
        ];

        return $this->response->setJSON($response);
    }

}

