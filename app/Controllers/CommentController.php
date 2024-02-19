<?php

namespace App\Controllers;

use App\Models\CommentModels;
use App\Models\FileModels;
use App\Models\TK01_Models;
use App\Models\TK02_Models;
use App\Models\TK03_Models;
use App\Models\TK04_Models;
use App\Models\TK05_Models;
use CodeIgniter\I18n\Time;
use App\Controllers\SendMailController;
use App\Models\ProjectModels;

class CommentController extends BaseController
{
    public function index_comment($id_project = null)
    {
        $CommentModels = new CommentModels();
        $ProjectModels = new ProjectModels();
        $data['comment_data'] = $CommentModels->where('id_project', $id_project)->orderBy('date_time', 'DESC')->findAll();
        $data['project_name'] = $ProjectModels->where('id_project', $id_project)->select('name_project_th')->first();
        echo view('layout/header');
        echo view('comment' , $data);
    }

    public function insert_comment($id_project = null, $id_tk = null, $type_tk = null)
    {
        $CommentModels = new CommentModels();
        $FileModels = new FileModels();
        $TK01_Models = new TK01_Models();
        $TK02_Models = new TK02_Models();
        $TK03_Models = new TK03_Models();
        $TK04_Models = new TK04_Models();
        $TK05_Models = new TK05_Models();
        $ProjectModels = new ProjectModels();
        $SendMailController = new SendMailController();

        helper(['form']);
        helper('filesystem');
        $id_file = null;
        $comment = $this->request->getVar('comment');
        $file = $this->request->getFile('file');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getClientName();
            $currentDateTime = Time::now();
            $FileModels->insert([
                'name_file' => $newName,
                'date_uploade' => $currentDateTime,
            ]);
            $id_file = $FileModels->insertID();
            $file->move(ROOTPATH . 'public/uploads/' . $id_file, $newName);
        }
        $data = [
            'comment' => !empty($comment) ? $comment : null,
            'id_file' => $id_file,
            'id_project' => $id_project,
            'id_tk' => $id_tk,
            'type' => $type_tk,
        ];
        $check = $CommentModels->insert($data);

        $id_tk_where = 'id_tk0' . $type_tk;
        $project_data = $ProjectModels->where($id_tk_where, $id_tk)->first();
        $name_project = $project_data['name_project_th'];
        $email_student = explode(',', $project_data['email_student']);

        if ($type_tk == 1) {
            $TK01_Models->update($id_tk, ['status_tk_01' => 3]);
        } else if ($type_tk == 2) {
            $TK02_Models->update($id_tk, ['status_tk_02' => 3]);
        } else if ($type_tk == 3) {
            $TK03_Models->update($id_tk, ['status_tk_03' => 3]);
        } else if ($type_tk == 4) {
            $TK04_Models->update($id_tk, ['status_tk_04' => 3]);
        } else if ($type_tk == 5) {
            $TK05_Models->update($id_tk, ['status_tk_05' => 3]);
        } else {
            $response = [
                'success' => false,
                'message' => 'เกิดข้อผิดพลาด',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        }

        if ($check) {
            $text = "โครงงาน " . $name_project . " เอกสาร ทก.0" . $type_tk . " ถูกส่งคืนกลับให้แก้ไข";
            $subject = "อัปเดตสถานะโครงงาน";
            foreach ($email_student as $key => $value) {
                $SendMailController->SendMail($value, $text, $subject);
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



