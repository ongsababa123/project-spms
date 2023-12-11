<?php

namespace App\Controllers;

use App\Models\UserModels;

class UserController extends BaseController
{
    public function create_user($type = null)
    {
        // helper(['form']);
        // $rules = [
        //     'name_user' => 'required|min_length[2]|max_length[200]',
        //     'lastname_user' => 'required|min_length[2]|max_length[200]',
        //     'phone_user' => 'required|min_length[10]|max_length[10]',
        //     'email_user' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user_table.email_user]',
        // ];
        $number_random = mt_rand(100000, 999999);
        // if ($this->validate($rules)) {
        //     $userModels = new UserModels();
        //     $data = [
        //         'email_user' => $this->request->getVar('email_user'),
        //         'name_user' => $this->request->getVar('name_user'),
        //         'lastname_user' => $this->request->getVar('lastname_user'),
        //         'phone_user' => $this->request->getVar('phone_user'),
        //         'password_user' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        //         'key_pass_user' => password_hash($number_random, PASSWORD_DEFAULT),
        //         'status_user' => 1,
        //         'type_user' => $type,
        //     ];
        //     $check = $userModels->save($data);
        //     if ($check) {
                $this->sendMail($this->request->getVar('email_user'), $number_random);
                $response = [
                    'success' => true,
                    'message' => 'สร้างข้อมูลสำเร็จ รหัส 6 หลักคุณคือ ' . $number_random . ' ใช้ในกรณีลืมรหัสผ่าน',
                    'reload' => true,
                ];
        //     } else {
        //         $response = [
        //             'success' => false,
        //             'message' => 'error',
        //             'reload' => false,
        //         ];
        //     }

        // } else {
        //     $data['validation'] = $this->validator;
        //     $response = [
        //         'success' => false,
        //         'message' => 'ผิดพลาด',
        //         'validator' => $this->validator->getErrors(), // Get validation errors
        //         'reload' => false,
        //     ];
        // }
        return $this->response->setJSON($response);
    }
    function sendMail($email_to , $keypass)
    {
        $to = $email_to;

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('johndoe@gmail.com', 'รหัสผ่านหกหลักของคุณ');

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

        $recordsFiltered = $totalRecords;
        $data = $UserModels->where('type_user', $type)->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
        ];

        return $this->response->setJSON($response);
    }
}

