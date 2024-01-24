<?php

namespace App\Controllers;

use App\Models\FileModels;
use App\Models\TK04_Models;
use App\Controllers\SendMailController;
use App\Models\ProjectModels;

class FileController extends BaseController
{
    public function openfile($id_file = null)
    {
        $filemodel = new FileModels();
        $data['file'] = $filemodel->find($id_file);

        if ($data['file']) {
            $namefile = $data['file']['name_file'];
            $path = 'public/uploads/' . $id_file . '/' . $namefile;

            return redirect()->to(base_url($path));
        } else {
            // Handle file not found
            return redirect()->to('error404');
        }
    }

    public function change_status($id_file = null, $status = null, $id_tk_04 = null)
    {
        $filemodel = new FileModels();
        $TK04_Models = new TK04_Models();
        if ($status == '1') {
            $TK04_Models->update($id_tk_04, ['status_tk_04' => 6]);
            $text1 = "เอกสารผ่าน";
        }else{
            $TK04_Models->update($id_tk_04, ['status_tk_04' => 5]);
            $text1 = "เอกสารไม่ผ่าน";
        }
        $check = $filemodel->update($id_file, ['status_file' => $status]);
        if ($check) {
            $SendMailController = new SendMailController();
            $ProjectModels = new ProjectModels();
            $project_data = $ProjectModels->where('id_tk04', $id_tk_04)->first();
            $name_project = $project_data['name_project_th'];
            $email_student = explode(',', $project_data['email_student']);
            $text = "โครงงาน " . $name_project . " ทก.04 รายงานความก้าวหน้า " . $text1;
            $subject = "อัปเดตสถานะโครงงาน";
            foreach ($email_student as $key => $value) {
                $SendMailController->sendMail($value, $text, $subject);
            }
            $response = [
                'success' => true,
                'message' => 'เสร็จสิ้น',
                'reload' => true,
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'เกิดข้อผิดพลาด',
                'reload' => false,
            ];
        }
        return $this->response->setJSON($response);
    }
}



