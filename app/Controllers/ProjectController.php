<?php

namespace App\Controllers;

use App\Models\UserTempModels;
use App\Models\UserModels;
use App\Models\ProjectModels;
use App\Models\TK01_Models;
use App\Models\FileModels;

use CodeIgniter\I18n\Time;

class ProjectController extends BaseController
{

    public function create_project_tk01()
    {
        helper(['form']);
        $UserModels = new UserModels();
        $UserTempModels = new UserTempModels();
        $FileModels = new FileModels();
        $TK01_Models = new TK01_Models();
        $ProjectModels = new ProjectModels();

        $researched_information = $this->request->getFile('researched_information');
        if ($researched_information->isValid() && !$researched_information->hasMoved()) {
            $newName = $researched_information->getClientName();
            $currentDateTime = Time::now();
            $FileModels->insert([
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ]);
            $id_file = $FileModels->insertID();
            $researched_information->move(ROOTPATH . 'public/uploads/' . $id_file, $newName);
            $TK01_Models->insert([
                'id_file_01' => $id_file,
                'status_tk_01' => 2
            ]);
            $id_tk01 = $TK01_Models->insertID();
            $email_students = array();
            for ($i = 1; $i <= 3; $i++) {
                $field_name = 'email_student_' . $i;
                $email_candidate = $this->request->getVar($field_name);
                if (!empty($email_candidate)) {
                    $check_user = $UserModels->where('email_user', $email_candidate)->first();
                    if ($check_user) {
                        $email_students[] = $email_candidate;
                    } else {
                        $email_students[] = $email_candidate;
                        $check_user_temp = $UserTempModels->where('email_user_temp', $email_candidate)->first();
                        if (empty($check_user_temp)) {
                            $data_temp = [
                                'email_user_temp' => $email_candidate,
                                'name_user_temp' => $this->request->getVar('name_student_' . $i),
                                'lastname_user_temp' => $this->request->getVar('lastname_student_' . $i),
                                'phone_user_temp' => $this->request->getVar('phone_student_' . $i),
                                'room_user_temp' => $this->request->getVar('room_student_' . $i),
                            ];
                            $UserTempModels->insert($data_temp);
                        }
                    }
                }
            }
            $emails_string = implode(', ', $email_students);
            $name_consult = array();
            for ($i = 1; $i <= 3; $i++) {
                $field_name = 'name_consult_' . $i;
                $name_consult_candidate = $this->request->getVar($field_name);

                if (!empty($name_consult_candidate)) {

                    $name_consult[] = $name_consult_candidate;
                }
            }
            if (!empty($name_consult)) {
                $name_consult_string = implode(', ', $name_consult);
            } else {
                $name_consult_string = null;
            }
            $data = [
                'name_project_th' => $this->request->getVar('name_project'),
                'name_project_eng' => $this->request->getVar('name_project_eng'),
                'email_student' => $emails_string,
                'email_teacher' => $this->request->getVar('select_teacher'),
                'name_consult' => $name_consult_string,
                'id_tk01' => $id_tk01,
                'id_tk02' => null,
                'id_tk03' => null,
                'id_tk04' => null,
                'id_tk05' => null,
                'department' => $this->request->getVar('department'),
                'subject_group' => $this->request->getVar('subject_group'),
                'term' => $this->request->getVar('semester'),
                'year' => $this->request->getVar('learn_year'),
                'status_project' => 1,
            ];
            $ProjectModels->insert($data);
            $response = [
                'success' => true,
                'message' => 'เสร็จสิ้น',
                'reload' => true,
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'โปรดอัปโหลดไฟล์ ทก.01 ก่อน',
                'reload' => false,
            ];
        }
        return $this->response->setJSON($response);
    }

}

