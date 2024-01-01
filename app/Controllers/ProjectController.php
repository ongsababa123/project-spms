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
                        $check_user_temp = $UserTempModels->where('email_user', $email_candidate)->first();
                        if (empty($check_user_temp)) {
                            $data_temp = [
                                'email_user' => $email_candidate,
                                'name_user' => $this->request->getVar('name_student_' . $i),
                                'lastname_user' => $this->request->getVar('lastname_student_' . $i),
                                'phone_user' => $this->request->getVar('phone_student_' . $i),
                                'room_user' => $this->request->getVar('room_student_' . $i),
                            ];
                            $UserTempModels->insert($data_temp);
                        }
                    }
                }
            }
            $emails_string = implode(',', $email_students);
            $name_consult = array();
            for ($i = 1; $i <= 3; $i++) {
                $field_name = 'name_consult_' . $i;
                $name_consult_candidate = $this->request->getVar($field_name);

                if (!empty($name_consult_candidate)) {

                    $name_consult[] = $name_consult_candidate;
                }
            }
            if (!empty($name_consult)) {
                $name_consult_string = implode(',', $name_consult);
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

    public function edit_project_tk01($id_project = null, $id_tk01 = null, $id_file = null)
    {
        helper(['form']);
        helper('filesystem');

        $UserModels = new UserModels();
        $UserTempModels = new UserTempModels();
        $FileModels = new FileModels();
        $TK01_Models = new TK01_Models();
        $ProjectModels = new ProjectModels();

        $researched_information = $this->request->getFile('researched_information');
        if ($researched_information->isValid() && !$researched_information->hasMoved()) {
            $del_path = 'public/uploads/' . $id_file . '/';
            delete_files($del_path, false); // Delete files into the folder
            $newName = $researched_information->getClientName();
            $researched_information->move(ROOTPATH . 'public/uploads/' . $id_file, $newName);
            $currentDateTime = Time::now();
            $file_update = [
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ];
            $FileModels->update($id_file, $file_update);
        }
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
                    $check_user_temp = $UserTempModels->where('email_user', $email_candidate)->first();
                    if (empty($check_user_temp)) {
                        $data_temp = [
                            'email_user' => $email_candidate,
                            'name_user' => $this->request->getVar('name_student_' . $i),
                            'lastname_user' => $this->request->getVar('lastname_student_' . $i),
                            'phone_user' => $this->request->getVar('phone_student_' . $i),
                            'room_user' => $this->request->getVar('room_student_' . $i),
                        ];
                        $UserTempModels->insert($data_temp);
                    }
                }
            }
        }
        $emails_string = implode(',', $email_students);
        $name_consult = array();
        for ($i = 1; $i <= 3; $i++) {
            $field_name = 'name_consult_' . $i;
            $name_consult_candidate = $this->request->getVar($field_name);

            if (!empty($name_consult_candidate)) {

                $name_consult[] = $name_consult_candidate;
            }
        }
        if (!empty($name_consult)) {
            $name_consult_string = implode(',', $name_consult);
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
        $TK01_Models->update($id_tk01, ['status_tk_01' => '2']);
        $ProjectModels->update($id_project, $data);

        $response = [
            'success' => true,
            'message' => 'เสร็จสิ้น',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    public function create_project_tk02($id_project = null)
    {
        $ProjectModels = new ProjectModels();
        $TK02_Models = new TK02_Models();
        $FileModels = new FileModels();
        $id_file_present = null;
        $id_file_project = null;
        $file_project = $this->request->getFile('file_project');
        if ($file_project->isValid() && !$file_project->hasMoved()) {
            $newName = $file_project->getClientName();
            $currentDateTime = Time::now();
            $FileModels->insert([
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ]);
            $id_file_project = $FileModels->insertID();
            $file_project->move(ROOTPATH . 'public/uploads/' . $id_file_project, $newName);
        } else {
            $response = [
                'success' => false,
                'message' => 'โปรดอัปโหลดไฟล์ บทที่ 1-3 ก่อน',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        }

        $file_present = $this->request->getFile('file_present');
        if ($file_present->isValid() && !$file_present->hasMoved()) {
            $newName = $file_present->getClientName();
            $currentDateTime = Time::now();
            $FileModels->insert([
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ]);
            $id_file_present = $FileModels->insertID();
            $file_present->move(ROOTPATH . 'public/uploads/' . $id_file_present, $newName);
        }
        $TK02_Models->insert([
            'id_file_02' => $id_file_project,
            'id_file_present' => $id_file_present,
            'status_tk_02' => 2
        ]);
        $id_tk02 = $TK02_Models->insertID();
        $data = [
            'id_tk02' => $id_tk02,
        ];
        $ProjectModels->update($id_project, $data);
        $response = [
            'success' => true,
            'message' => 'เสร็จสิ้น',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    public function edit_project_tk02($id_tk02 = null, $id_file = null, $id_file_present = null)
    {
        helper(['form']);
        helper('filesystem');
        $TK02_Models = new TK02_Models();
        $FileModels = new FileModels();

        $file_project = $this->request->getFile('file_project');
        if ($file_project->isValid() && !$file_project->hasMoved()) {
            $del_path = 'public/uploads/' . $id_file . '/';
            delete_files($del_path, false); // Delete files into the folder
            $newName = $file_project->getClientName();
            $currentDateTime = Time::now();
            $data_file = [
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ];
            $FileModels->update($id_file, $data_file);
            $file_project->move(ROOTPATH . 'public/uploads/' . $id_file, $newName);
        }

        $file_present = $this->request->getFile('file_present');
        if ($file_present->isValid() && !$file_present->hasMoved()) {
            $newName = $file_present->getClientName();
            $currentDateTime = Time::now();
            if ($id_file_present == 'null') {
                $FileModels->insert([
                    'name_file' => $newName,
                    'date_uploade' => $currentDateTime,
                ]);
                $id_file_present = $FileModels->insertID();
                $file_present->move(ROOTPATH . 'public/uploads/' . $id_file_present, $newName);
                $TK02_Models->update($id_tk02, ['id_file_present' => $id_file_present]);
            } else {
                $del_path_present = 'public/uploads/' . $id_file_present . '/';
                delete_files($del_path_present, false); // Delete files into the folder
                $data_file_present = [
                    'name_file' => $newName,
                    'date_uploade' => $currentDateTime,
                ];
                $FileModels->update($id_file_present, $data_file_present);
                $file_present->move(ROOTPATH . 'public/uploads/' . $id_file_present, $newName);
            }
        }
        $TK02_Models->update($id_tk02, ['status_tk_02' => '2']);
        $response = [
            'success' => true,
            'message' => 'เสร็จสิ้น',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    public function create_project_tk03($id_project = null)
    {
        $ProjectModels = new ProjectModels();
        $TK03_Models = new TK03_Models();
        $FileModels = new FileModels();
        $id_file_present = null;
        $id_file_project = null;
        $file_project_tk03 = $this->request->getFile('file_project_tk03');
        if ($file_project_tk03->isValid() && !$file_project_tk03->hasMoved()) {
            $newName = $file_project_tk03->getClientName();
            $currentDateTime = Time::now();
            $FileModels->insert([
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ]);
            $id_file_project = $FileModels->insertID();
            $file_project_tk03->move(ROOTPATH . 'public/uploads/' . $id_file_project, $newName);
        } else {
            $response = [
                'success' => false,
                'message' => 'โปรดอัปโหลดไฟล์ บทที่ 1-5 ก่อน',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        }

        $file_present_tk03 = $this->request->getFile('file_present_tk03');
        if ($file_present_tk03->isValid() && !$file_present_tk03->hasMoved()) {
            $newName = $file_present_tk03->getClientName();
            $currentDateTime = Time::now();
            $FileModels->insert([
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ]);
            $id_file_present = $FileModels->insertID();
            $file_present_tk03->move(ROOTPATH . 'public/uploads/' . $id_file_present, $newName);
        }
        $TK03_Models->insert([
            'id_file_03' => $id_file_project,
            'id_file_present' => $id_file_present,
            'status_tk_03' => 2,
            'id_score' => null,
        ]);
        $id_tk03 = $TK03_Models->insertID();
        $data = [
            'id_tk03' => $id_tk03,
        ];
        $ProjectModels->update($id_project, $data);
        $response = [
            'success' => true,
            'message' => 'เสร็จสิ้น',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    public function edit_project_tk03($id_tk03 = null, $id_file = null, $id_file_present = null)
    {
        helper(['form']);
        helper('filesystem');
        $TK03_Models = new TK03_Models();
        $FileModels = new FileModels();

        $file_project = $this->request->getFile('file_project_tk03');
        if ($file_project->isValid() && !$file_project->hasMoved()) {
            $del_path = 'public/uploads/' . $id_file . '/';
            delete_files($del_path, false); // Delete files into the folder
            $newName = $file_project->getClientName();
            $currentDateTime = Time::now();
            $data_file = [
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ];
            $FileModels->update($id_file, $data_file);
            $file_project->move(ROOTPATH . 'public/uploads/' . $id_file, $newName);
        }

        $file_present = $this->request->getFile('file_present_tk03');
        if ($file_present->isValid() && !$file_present->hasMoved()) {
            $newName = $file_present->getClientName();
            $currentDateTime = Time::now();
            if ($id_file_present == 'null') {
                $FileModels->insert([
                    'name_file' => $newName,
                    'date_uploade' => $currentDateTime,
                ]);
                $id_file_present = $FileModels->insertID();
                $file_present->move(ROOTPATH . 'public/uploads/' . $id_file_present, $newName);
                $TK03_Models->update($id_tk03, ['id_file_present' => $id_file_present]);
            } else {
                $del_path_present = 'public/uploads/' . $id_file_present . '/';
                delete_files($del_path_present, false); // Delete files into the folder

                $data_file_present = [
                    'name_file' => $newName,
                    'date_uploade' => $currentDateTime,
                ];
                $FileModels->update($id_file_present, $data_file_present);
                $file_present->move(ROOTPATH . 'public/uploads/' . $id_file_present, $newName);
            }
        }
        $TK03_Models->update($id_tk03, ['status_tk_03' => '2']);

        $response = [
            'success' => true,
            'message' => 'เสร็จสิ้น',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    public function create_project_tk04($id_project = null)
    {
        $ProjectModels = new ProjectModels();
        $TK04_Models = new TK04_Models();
        $FileModels = new FileModels();
        $id_file_project = null;
        $file_project_tk04 = $this->request->getFile('file_project_tk04');
        if ($file_project_tk04->isValid() && !$file_project_tk04->hasMoved()) {
            $newName = $file_project_tk04->getClientName();
            $currentDateTime = Time::now();
            $FileModels->insert([
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
                'status_file' => 0,
            ]);
            $id_file_project = $FileModels->insertID();
            $file_project_tk04->move(ROOTPATH . 'public/uploads/' . $id_file_project, $newName);
        } else {
            $response = [
                'success' => false,
                'message' => 'โปรดอัปโหลดไฟล์รายงานความก้าวหน้าก่อน',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        }
        $TK04_Models->insert([
            'id_file_04' => $id_file_project,
            'status_tk_04' => 2,
        ]);
        $id_tk04 = $TK04_Models->insertID();
        $data = [
            'id_tk04' => $id_tk04,
        ];
        $ProjectModels->update($id_project, $data);
        $response = [
            'success' => true,
            'message' => 'เสร็จสิ้น',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    public function edit_project_tk04($id_tk04 = null)
    {
        helper(['form']);
        helper('filesystem');
        $TK04_Models = new TK04_Models();
        $FileModels = new FileModels();

        $file_project = $this->request->getFile('file_project_tk04');
        if ($file_project->isValid() && !$file_project->hasMoved()) {
            $newName = $file_project->getClientName();
            $currentDateTime = Time::now();
            $FileModels->insert([
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
                'status_file' => 0,
            ]);
            $id_file_project = $FileModels->insertID();
            $data['tk04'] = $TK04_Models->where('id_tk_04', $id_tk04)->first();
            $newid_file = $data['tk04']['id_file_04'] . ',' . $id_file_project;
            $TK04_Models->update($id_tk04, ['id_file_04' => $newid_file]);
            $file_project->move(ROOTPATH . 'public/uploads/' . $id_file_project, $newName);
        }
        $TK04_Models->update($id_tk04, ['status_tk_04' => '2']);

        $response = [
            'success' => true,
            'message' => 'เสร็จสิ้น',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    public function create_project_tk05($id_project = null)
    {
        $ProjectModels = new ProjectModels();
        $TK05_Models = new TK05_Models();
        $FileModels = new FileModels();
        $id_file_present = null;
        $id_file_project = null;
        $file_project_tk05 = $this->request->getFile('file_project_tk05');
        if ($file_project_tk05->isValid() && !$file_project_tk05->hasMoved()) {
            $newName = $file_project_tk05->getClientName();
            $currentDateTime = Time::now();
            $FileModels->insert([
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ]);
            $id_file_project = $FileModels->insertID();
            $file_project_tk05->move(ROOTPATH . 'public/uploads/' . $id_file_project, $newName);
        } else {
            $response = [
                'success' => false,
                'message' => 'โปรดอัปโหลดไฟล์ บทที่ 1-5 ก่อน',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        }

        $file_present_tk05 = $this->request->getFile('file_present_tk05');
        if ($file_present_tk05->isValid() && !$file_present_tk05->hasMoved()) {
            $newName = $file_present_tk05->getClientName();
            $currentDateTime = Time::now();
            $FileModels->insert([
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ]);
            $id_file_present = $FileModels->insertID();
            $file_present_tk05->move(ROOTPATH . 'public/uploads/' . $id_file_present, $newName);
        }
        $TK05_Models->insert([
            'id_file_05' => $id_file_project,
            'id_file_present' => $id_file_present,
            'status_tk_05' => 2,
            'id_score' => null,
        ]);
        $id_tk05 = $TK05_Models->insertID();
        $data = [
            'id_tk05' => $id_tk05,
        ];
        $ProjectModels->update($id_project, $data);
        $response = [
            'success' => true,
            'message' => 'เสร็จสิ้น',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    public function edit_project_tk05($id_tk05 = null, $id_file = null, $id_file_present = null)
    {
        helper(['form']);
        helper('filesystem');
        $TK05_Models = new TK05_Models();
        $FileModels = new FileModels();

        $file_project = $this->request->getFile('file_project_tk05');
        if ($file_project->isValid() && !$file_project->hasMoved()) {
            $del_path = 'public/uploads/' . $id_file . '/';
            delete_files($del_path, false); // Delete files into the folder
            $newName = $file_project->getClientName();
            $currentDateTime = Time::now();
            $data_file = [
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ];
            $FileModels->update($id_file, $data_file);
            $file_project->move(ROOTPATH . 'public/uploads/' . $id_file, $newName);
        }

        $file_present = $this->request->getFile('file_present_tk05');
        if ($file_present->isValid() && !$file_present->hasMoved()) {
            $newName = $file_present->getClientName();
            $currentDateTime = Time::now();
            if ($id_file_present == 'null') {
                $FileModels->insert([
                    'name_file' => $newName,
                    'date_uploade' => $currentDateTime,
                ]);
                $id_file_present = $FileModels->insertID();
                $file_present->move(ROOTPATH . 'public/uploads/' . $id_file_present, $newName);
                $TK05_Models->update($id_tk05, ['id_file_present' => $id_file_present]);
            } else {
                $del_path_present = 'public/uploads/' . $id_file_present . '/';
                delete_files($del_path_present, false); // Delete files into the folder

                $data_file_present = [
                    'name_file' => $newName,
                    'date_uploade' => $currentDateTime,
                ];
                $FileModels->update($id_file_present, $data_file_present);
                $file_present->move(ROOTPATH . 'public/uploads/' . $id_file_present, $newName);
            }
        }
        $TK05_Models->update($id_tk05, ['status_tk_05' => '2']);

        $response = [
            'success' => true,
            'message' => 'เสร็จสิ้น',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
    public function get_data_table_project()
    {
        $ProjectModels = new ProjectModels();
        $TK01_Models = new TK01_Models();
        $TK02_Models = new TK02_Models();
        $TK03_Models = new TK03_Models();
        $TK04_Models = new TK04_Models();
        $TK05_Models = new TK05_Models();

        $email = session()->get('email');
        $allData = $ProjectModels->findAll();

        // Filter data based on the email condition
        $filteredData = array_filter($allData, function ($row) use ($email) {
            return strpos($row['email_student'], $email) !== false;
        });

        // Get the total number of records after filtering
        $totalRecords = count($filteredData);

        // Get the DataTables parameters
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');

        // Slice the filtered data based on limit and start
        $slicedData = array_slice($filteredData, $start, $limit);

        // Fetch related data for each project
        $data = [];
        foreach ($slicedData as $key => $value) {
            $project = $value;
            $project['data_tk01'] = $TK01_Models->where('id_tk_01', $value['id_tk01'])->first();
            $project['data_tk02'] = $TK02_Models->where('id_tk_02', $value['id_tk02'])->first();
            $project['data_tk03'] = $TK03_Models->where('id_tk_03', $value['id_tk03'])->first();
            $project['data_tk04'] = $TK04_Models->where('id_tk_04', $value['id_tk04'])->first();
            $project['data_tk05'] = $TK05_Models->where('id_tk_05', $value['id_tk05'])->first();

            $data[] = $project;
        }

        // Prepare the response
        $response = [
            'draw' => intval($draw),
            'recordsTotal' => count($allData),
            'recordsFiltered' => $totalRecords,
            'data' => $data,
        ];

        return $this->response->setJSON($response);
    }

    public function get_data_table_project_teacher($status_project = null)
    {
        $ProjectModels = new ProjectModels();
        $TK01_Models = new TK01_Models();
        $TK02_Models = new TK02_Models();
        $TK03_Models = new TK03_Models();
        $TK04_Models = new TK04_Models();
        $TK05_Models = new TK05_Models();
        $UserModels = new UserModels();
        $UserTempModels = new UserTempModels();
        $FileModels = new FileModels();

        $email = session()->get('email');
        $allData = $ProjectModels->where('status_project', $status_project)->findAll();

        // Filter data based on the email condition
        $filteredData = array_filter($allData, function ($row) use ($email) {
            return strpos($row['email_teacher'], $email) !== false;
        });

        // Get the total number of records after filtering
        $totalRecords = count($filteredData);

        // Get the DataTables parameters
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');

        // Slice the filtered data based on limit and start
        $slicedData = array_slice($filteredData, $start, $limit);

        // Fetch related data for each project
        $data = [];
        foreach ($slicedData as $key => $value) {
            $project = $value;
            $project['data_tk01'] = $TK01_Models->where('id_tk_01', $value['id_tk01'])->where('status_tk_01', 6)->first();
            if ($project['data_tk01'] != null) {
                $project['data_tk02'] = $TK02_Models->where('id_tk_02', $value['id_tk02'])->first();
                $project['data_tk03'] = $TK03_Models->where('id_tk_03', $value['id_tk03'])->first();
                $project['data_tk04'] = $TK04_Models->where('id_tk_04', $value['id_tk04'])->first();
                if ($project['data_tk04'] != null) {
                    $id_file_tk04 = explode(',', $project['data_tk04']['id_file_04']);
                    foreach ($id_file_tk04 as $tk04_key => $tk04_value) {
                        $project['data_tk04']['file_04'][$tk04_key] = $FileModels->where('id_file', $tk04_value)->first();
                    }
                }

                $project['data_tk05'] = $TK05_Models->where('id_tk_05', $value['id_tk05'])->first();
                $email_students = explode(',', $project['email_student']);
                foreach ($email_students as $student_key => $value_student) {
                    $project['students'][$student_key] = $UserTempModels->where('email_user', $value_student)->first();
                    if ($project['students'][$student_key] == null) {
                        $project['students'][$student_key] = $UserModels->where('email_user', $value_student)->first();
                    }
                }
                $project['teacher'] = $UserModels->where('email_user', $project['email_teacher'])->first();
                $data[] = $project;
            }
        }

        // Prepare the response
        $response = [
            'draw' => intval($draw),
            'recordsTotal' => count($allData),
            'recordsFiltered' => $totalRecords,
            'data' => $data,
        ];

        return $this->response->setJSON($response);
    }

    public function get_data_default($id_project)
    {
        $ProjectModels = new ProjectModels();
        $UserModels = new UserModels();
        $UserTempModels = new UserTempModels();
        $TK01_Models = new TK01_Models();
        $TK02_Models = new TK02_Models();
        $TK03_Models = new TK03_Models();
        $TK04_Models = new TK04_Models();
        $TK05_Models = new TK05_Models();
        $FileModels = new FileModels();
        $data['project'] = $ProjectModels->where('id_project', $id_project)->first();
        $email_students = explode(',', $data['project']['email_student']);
        foreach ($email_students as $key => $value) {
            $data['students'][$key] = $UserTempModels->where('email_user', $value)->first();
            if ($data['students'][$key] == null) {
                $data['students'][$key] = $UserModels->where('email_user', $value)->first();
            }
        }
        ;
        $data['data_tk01'] = $TK01_Models->where('id_tk_01', $data['project']['id_tk01'])->first();
        $data['data_tk02'] = $TK02_Models->where('id_tk_02', $data['project']['id_tk02'])->first();
        $data['data_tk03'] = $TK03_Models->where('id_tk_03', $data['project']['id_tk03'])->first();
        $data['data_tk04'] = $TK04_Models->where('id_tk_04', $data['project']['id_tk04'])->first();
        if ($data['data_tk04'] != null) {
            $id_file_tk04 = explode(',', $data['data_tk04']['id_file_04']);
            foreach ($id_file_tk04 as $key => $value) {
                $data['data_tk04']['file_04'][$key] = $FileModels->where('id_file', $value)->first();
            }
        }

        $data['data_tk05'] = $TK05_Models->where('id_tk_05', $data['project']['id_tk05'])->first();
        return $this->response->setJSON($data);
    }

    public function changestatus_request($id_tk = null, $type_tk = null, $status = null)
    {
        $TK01_Models = new TK01_Models();
        $TK02_Models = new TK02_Models();
        $TK03_Models = new TK03_Models();
        $TK04_Models = new TK04_Models();
        $TK05_Models = new TK05_Models();

        if ($type_tk == 1) {
            $TK01_Models->update($id_tk, ['status_tk_01' => $status]);
        } else if ($type_tk == 2) {
            $TK02_Models->update($id_tk, ['status_tk_02' => $status]);
        } else if ($type_tk == 3) {
            $TK03_Models->update($id_tk, ['status_tk_03' => $status]);
        } else if ($type_tk == 4) {
            $TK04_Models->update($id_tk, ['status_tk_04' => $status]);
        } else if ($type_tk == 5) {
            $TK05_Models->update($id_tk, ['status_tk_05' => $status]);
        } else {
            $response = [
                'success' => false,
                'message' => 'เกิดข้อผิดพลาด',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        }

        $response = [
            'success' => true,
            'message' => 'เสร็จสิ้น',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
}

