<?php

namespace App\Controllers;

use App\Models\UserModels;

class LoginController extends BaseController
{
    public function index_login()
    {
        echo view('login');
    }

    public function loginAuth()
    {
        $session = session();
        $UserModels = new UserModels();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $UserModels->where('email_user', $email)->first();

        if ($data) {
            $pass = $data['password_user'];
            $authenticatePassword = password_verify($password, $pass);

            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $data['id_user'],
                    'email' => $data['email_user'],
                    'name' => $data['name_user'],
                    'lastname' => $data['lastname_user'],
                    'type' => $data['type_user'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                $response = [
                    'success' => true,
                    'message' => 'เข้าสู่ระบบสำเร็จ',
                    'reload' => true,
                    'type' => '/',
                ];

            } else {
                $response = [
                    'success' => false,
                    'message' => 'รหัสผ่านไม่ถูกต้อง',
                    'reload' => false,
                ];
            }
        } else {
            $response = [
                'success' => false,
                'message' => 'อีเมล์ไม่ถูกต้อง',
                'reload' => false,
            ];
        }
        return $this->response->setJSON($response);
    }

    public function logout()
    {

        $session = session();
        $session->destroy();

        return redirect()->to('/login');
    }
}

