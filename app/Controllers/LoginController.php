<?php

namespace App\Controllers;

use App\Models\UserModels;

use function PHPSTORM_META\type;

class LoginController extends BaseController
{
    public function index_login()
    {
        echo view('login');
    }

    public function index_login_first($id_user = null)
    {
        echo view('first_login', ['id_user' => $id_user]);
    }

    public function index_login_forgotpassword()
    {
        echo view('forgot_password');
    }

    public function loginAuth()
    {
        helper(['form']);
        $session = session();
        $UserModels = new UserModels();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $UserModels->where('email_user', $email)->first();

        if ($data) {
            $pass = $data['password_user'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                if ($data['status_user'] == '2') {
                    $type = '/login/first/' . $data['id_user'];
                    $response = [
                        'success' => true,
                        'message' => 'เข้าสู่ระบบครั้งแรก',
                        'reload' => true,
                        'type' => $type,
                    ];
                } elseif ($data['status_user'] == '1') {
                    $type = '/';
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
                        'type' => $type,
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'ผู้ใช้นี้ถูกปิดใช้งานแล้ว',
                        'reload' => false,
                    ];
                }

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

    public function first_login($id_user = null)
    {
        helper(['form']);
        $UserModels = new UserModels();
        $data = $UserModels->where('id_user', $id_user)->first();
        if ($data['status_user'] == '0') {
            $response = [
                'success' => false,
                'message' => 'ผู้ใช้นี้ถูกปิดใช้งานแล้ว',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        } else {
            $number_random = mt_rand(100000, 999999);
            $data_pass = [
                'password_user' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'status_user' => 1,
                'key_pass_user' => password_hash($number_random, PASSWORD_DEFAULT),
            ];
            $this->sendMail($data['email_user'], $number_random);

            $check = $UserModels->update($id_user, $data_pass);
            if ($check) {
                $response = [
                    'success' => true,
                    'message' => 'เปลี่ยนรหัสผ่านสำเร็จ',
                    'reload' => true,
                    'type' => '/',
                ];
            } else {
                $response = [
                    'success' => false,
                    'message' => 'error',
                    'reload' => false,
                ];
            }
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

    public function forgot_password()
    {
        helper(['form']);
        $UserModels = new UserModels();

        $email = $this->request->getVar('email');
        $pin = $this->request->getVar('pin');
        $data = $UserModels->where('email_user', $email)->first();
        if ($data) {
            $pass_pin = $data['key_pass_user'];
            $authenticatePin = password_verify($pin, $pass_pin);
            if ($authenticatePin) {
                $response = [
                    'success' => true,
                    'message' => 'รหัสผ่านหกหลักถูกต้อง',
                    'reload' => true,
                    'type' => '/login/first/' . $data['id_user'],
                ];
            } else {
                $response = [
                    'success' => false,
                    'message' => 'อีเมล์หรือรหัสหกหลักไม่ถูกต้อง',
                    'reload' => false,
                ];
            }
        } else {
            $response = [
                'success' => false,
                'message' => 'อีเมล์หรือรหัสหกหลักไม่ถูกต้อง',
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

