<?php

namespace App\Controllers;

use App\Models\UserModels;

class UserController extends BaseController
{
    public function create_user($type = null)
    {
        helper(['form']);
        $rules = [
            'name_user' => 'required|min_length[2]|max_length[200]',
            'lastname_user' => 'required|min_length[2]|max_length[200]',
            'phone_user' => 'required|min_length[10]|max_length[10]',
            'email_user' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user_table.email_user]',
            'password' => 'required|min_length[4]|max_length[200]',
        ];
        $number_random = mt_rand(100000, 999999);
        if ($this->validate($rules)) {
            $userModels = new UserModels();
            $data = [
                'email_user' => $this->request->getVar('email_user'),
                'name_user' => $this->request->getVar('name_user'),
                'lastname_user' => $this->request->getVar('lastname_user'),
                'phone_user' => $this->request->getVar('phone_user'),
                'password_user' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'key_pass_user' => password_hash($number_random, PASSWORD_DEFAULT),
                'status_user' => 2,
                'type_user' => $type,
            ];
            $check = $userModels->save($data);
            if ($check) {
                // $this->sendMail($this->request->getVar('email_user'), $number_random);
                $response = [
                    'success' => true,
                    'message' => 'การสร้างข้อมูลเสร็จสมบูรณ์! กรุณาตรวจสอบอีเมล์ของคุณเพื่อรับรหัส 6 หลักสำหรับการเข้าใช้งาน',
                    'reload' => true,
                ];
            } else {
                $response = [
                    'success' => false,
                    'message' => 'error',
                    'reload' => false,
                ];
            }

        } else {
            $data['validation'] = $this->validator;
            $response = [
                'success' => false,
                'message' => 'ผิดพลาด',
                'validator' => $this->validator->getErrors(), // Get validation errors
                'reload' => false,
            ];
        }
        return $this->response->setJSON($response);
    }

    public function edit_user($id_user = null)
    {
        helper(['form']);
        $status = $this->request->getVar('customSwitch3') === 'on' ? 1 : 0;
        $rules = [
            'name_user' => 'required|min_length[2]|max_length[200]',
            'lastname_user' => 'required|min_length[2]|max_length[200]',
            'phone_user' => 'required|min_length[10]|max_length[10]',
            'email_user' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user_table.email_user,id_user,' . $id_user . ']',
        ];
        $password = $this->request->getVar('password');

        if ($this->validate($rules)) {
            $userModels = new UserModels();
            $data = [
                'email_user' => $this->request->getVar('email_user'),
                'name_user' => $this->request->getVar('name_user'),
                'lastname_user' => $this->request->getVar('lastname_user'),
                'phone_user' => $this->request->getVar('phone_user'),
                'status_user' => $status,
            ];
            if ($password !== '') {
                $passdata = [
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                ];
                $data = array_merge($data, $passdata);
            }
            $check = $userModels->update($id_user, $data);
            if ($check) {
                $response = [
                    'success' => true,
                    'message' => 'อัปเดตข้อมูลสำเร็จ',
                    'reload' => true,
                ];
            } else {
                $response = [
                    'success' => false,
                    'message' => 'error',
                    'reload' => false,
                ];
            }

        } else {
            $data['validation'] = $this->validator;
            $response = [
                'success' => false,
                'message' => 'ผิดพลาด',
                'validator' => $this->validator->getErrors(), // Get validation errors
                'reload' => false,
            ];
        }
        return $this->response->setJSON($response);
    }
    function sendMail($email_to, $keypass)
    {
        $to = $email_to;

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('6239010001@p-vec.ac.th', 'รหัสผ่านหกหลักของคุณ');

        $email->setSubject('รหัสผ่านหกหลักของคุณ');
        $email->setMessage('รหัสผ่านหกหลักของคุณคือ' . '<br>' . $keypass . "<br>" . 'กรุณาเก็บไว้ส่วนตัวใช้สำหรับรีเซ็ตรหัสผ่านของคุณ');
        $email->send();
    }

    public function get_data_table_user($type = null)
    {
        $UserModels = new UserModels();
        $totalRecords = $UserModels->where('type_user', $type)->countAllResults();

        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];

        // Sorting
        $orderColumnIndex = $this->request->getVar('order')[0]['column'];
        $orderDirection = $this->request->getVar('order')[0]['dir'];
        $orderColumns = ['email_user', 'name_user', 'lastname_user', 'phone_user']; // Add more columns as needed
        $orderBy = $orderColumns[$orderColumnIndex] . ' ' . $orderDirection;

        $UserModels->orderBy($orderBy);

        if (!empty($searchValue)) {
            $UserModels->groupStart()
                ->like('email_user', $searchValue)
                ->orLike('name_user', $searchValue)
                ->orLike('lastname_user', $searchValue)
                ->orLike('phone_user', $searchValue)
                ->groupEnd();
        }

        $recordsFiltered = $totalRecords;
        $data = $UserModels->where('type_user', $type)
            ->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }

}

