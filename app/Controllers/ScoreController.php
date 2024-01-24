<?php

namespace App\Controllers;

use App\Models\ProjectModels;
use App\Models\ScoreModels;
use App\Models\TESTModels;
use App\Models\TK05_Models;
use App\Models\TK03_Models;
use App\Controllers\SendMailController;

class ScoreController extends BaseController
{

    public function index_scorepage($id_test = null, $id_project = null, $type_tk = null)
    {
        $ProjectModels = new ProjectModels();
        $ScoreModels = new ScoreModels();
        $data['project'] = $ProjectModels->where('id_project', $id_project)->first();
        $data['id_test'] = $id_test;
        $data['type_tk'] = $type_tk;
        $data['score'] = $ScoreModels->where('id_test_list', $id_test)->where('id_project', $id_project)->first();

        echo view('layout/header');
        echo view('scorepage_test', $data);
    }

    public function create_scorepage($id_test = null, $id_project = null, $type_tk = null)
    {
        helper(['form']);
        $ScoreModels = new ScoreModels();
        $TESTModels = new TESTModels();
        $TK05_Models = new TK05_Models();
        $TK03_Models = new TK03_Models();
        $ProjectModels = new ProjectModels();

        $rules = [
            'r1_1' => 'required',
            'r1_2' => 'required',
            'r2_1' => 'required',
            'r2_2' => 'required',
            'r3_1' => 'required',
            'r3_2' => 'required',
            'r3_3' => 'required',
            'r4_1' => 'required',
            'r4_2' => 'required',
            'r4_3' => 'required',
            'r4_4' => 'required',
            'r4_5' => 'required',
            'r4_6' => 'required',
            'r5_1' => 'required',
            'r5_2' => 'required',
            'r5_3' => 'required',
            'r5_4' => 'required',
            'r5_5' => 'required',
            'r6_1' => 'required',
            'r6_2' => 'required',
        ];
        if ($this->validate($rules)) {
            $data = [
                'id_test_list' => $id_test,
                'id_project' => $id_project,
                'score1_1' => $this->request->getVar('r1_1'),
                'score1_2' => $this->request->getVar('r1_2'),
                'score2_1' => $this->request->getVar('r2_1'),
                'score2_2' => $this->request->getVar('r2_2'),
                'score3_1' => $this->request->getVar('r3_1'),
                'score3_2' => $this->request->getVar('r3_2'),
                'score3_3' => $this->request->getVar('r3_3'),
                'score4_1' => $this->request->getVar('r4_1'),
                'score4_2' => $this->request->getVar('r4_2'),
                'score4_3' => $this->request->getVar('r4_3'),
                'score4_4' => $this->request->getVar('r4_4'),
                'score4_5' => $this->request->getVar('r4_5'),
                'score4_6' => $this->request->getVar('r4_6'),
                'score5_1' => $this->request->getVar('r5_1'),
                'score5_2' => $this->request->getVar('r5_2'),
                'score5_3' => $this->request->getVar('r5_3'),
                'score5_4' => $this->request->getVar('r5_4'),
                'score5_5' => $this->request->getVar('r5_5'),
                'score6_1' => $this->request->getVar('r6_1'),
                'score6_2' => $this->request->getVar('r6_2'),
            ];
            $ScoreModels->save($data);
            $totalScore = 0;
            // Iterate through the keys in $data and sum up the scores
            foreach ($data as $key => $value) {
                // Check if the key starts with 'score'
                if (strpos($key, 'score') === 0) {
                    // Add the score to the total
                    $totalScore += (int) $value;
                }
            }
            if ($totalScore <= 59) {
                $status_test = 3;
                $status_tk = '3';
                $text1 = "ไม่ผ่านการสอบ";
            } else {
                $status_test = 2;
                $status_tk = '6';
                if ($type_tk == 2) {
                    $ProjectModels->update($id_project, ['status_project' => 0]);
                }
                $text1 = "ผ่านการสอบ";
            }

            $data_project = $ProjectModels->find($id_project);
            if ($type_tk == 1) {
                $TK03_Models->update($data_project['id_tk03'], ['status_tk_03' => $status_tk]);
                $TESTModels->update($id_test, ['status_test' => $status_test]);
                $text2 = "ประเภท สอบ 60";
            } else {
                $TK05_Models->update($data_project['id_tk05'], ['status_tk_05' => $status_tk]);
                $TESTModels->update($id_test, ['status_test' => $status_test]);
                $text2 = "ประเภท สอบ 100";
            }


            $SendMailController = new SendMailController();
            $name_project = $data_project['name_project_th'];
            $email_student = explode(',', $data_project['email_student']);
            $text = "ผลการสอบของ โครงงาน " . $name_project . " " . $text1 . " " . $text2 . " ได้คะแนน " . $totalScore . " คะแนน กรุณาตรวจสอบคะแนนในตารางสอบ";
            $subject = "ผลการสอบ";
            foreach ($email_student as $key => $value) {
                $SendMailController->sendMail($value, $text, $subject);
            }

            $response = [
                'success' => true,
                'message' => 'บันทึกคะแนนเสร็จสมบูรณ์',
                'reload' => true,
            ];
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

    public function update_scorepage($id_test = null, $id_project = null, $id_score = null, $type_tk = null)
    {
        helper(['form']);
        $ScoreModels = new ScoreModels();
        $TESTModels = new TESTModels();
        $TK05_Models = new TK05_Models();
        $TK03_Models = new TK03_Models();
        $ProjectModels = new ProjectModels();

        $rules = [
            'r1_1' => 'required',
            'r1_2' => 'required',
            'r2_1' => 'required',
            'r2_2' => 'required',
            'r3_1' => 'required',
            'r3_2' => 'required',
            'r3_3' => 'required',
            'r4_1' => 'required',
            'r4_2' => 'required',
            'r4_3' => 'required',
            'r4_4' => 'required',
            'r4_5' => 'required',
            'r4_6' => 'required',
            'r5_1' => 'required',
            'r5_2' => 'required',
            'r5_3' => 'required',
            'r5_4' => 'required',
            'r5_5' => 'required',
            'r6_1' => 'required',
            'r6_2' => 'required',
        ];
        if ($this->validate($rules)) {
            $data = [
                'id_test_list' => $id_test,
                'id_project' => $id_project,
                'score1_1' => $this->request->getVar('r1_1'),
                'score1_2' => $this->request->getVar('r1_2'),
                'score2_1' => $this->request->getVar('r2_1'),
                'score2_2' => $this->request->getVar('r2_2'),
                'score3_1' => $this->request->getVar('r3_1'),
                'score3_2' => $this->request->getVar('r3_2'),
                'score3_3' => $this->request->getVar('r3_3'),
                'score4_1' => $this->request->getVar('r4_1'),
                'score4_2' => $this->request->getVar('r4_2'),
                'score4_3' => $this->request->getVar('r4_3'),
                'score4_4' => $this->request->getVar('r4_4'),
                'score4_5' => $this->request->getVar('r4_5'),
                'score4_6' => $this->request->getVar('r4_6'),
                'score5_1' => $this->request->getVar('r5_1'),
                'score5_2' => $this->request->getVar('r5_2'),
                'score5_3' => $this->request->getVar('r5_3'),
                'score5_4' => $this->request->getVar('r5_4'),
                'score5_5' => $this->request->getVar('r5_5'),
                'score6_1' => $this->request->getVar('r6_1'),
                'score6_2' => $this->request->getVar('r6_2'),
            ];
            $ScoreModels->update($id_score, $data);
            $totalScore = 0;
            // Iterate through the keys in $data and sum up the scores
            foreach ($data as $key => $value) {
                // Check if the key starts with 'score'
                if (strpos($key, 'score') === 0) {
                    // Add the score to the total
                    $totalScore += (int) $value;
                }
            }
            if ($totalScore <= 59) {
                $status_test = 3;
                $status_tk = '3';
                $text1 = "ไม่ผ่านการสอบ";
            } else {
                $status_test = 2;
                $status_tk = '6';
                if ($type_tk == 2) {
                    $ProjectModels->update($id_project, ['status_project' => 0]);
                }
                $text1 = "ผ่านการสอบ";
            }

            $data_project = $ProjectModels->find($id_project);
            if ($type_tk == 1) {
                $TK03_Models->update($data_project['id_tk03'], ['status_tk_03' => $status_tk]);
                $TESTModels->update($id_test, ['status_test' => $status_test]);
                $text2 = "ประเภท สอบ 60";
            } else {
                $TK05_Models->update($data_project['id_tk05'], ['status_tk_05' => $status_tk]);
                $TESTModels->update($id_test, ['status_test' => $status_test]);
                $text2 = "ประเภท สอบ 100";
            }


            $SendMailController = new SendMailController();
            $name_project = $data_project['name_project_th'];
            $email_student = explode(',', $data_project['email_student']);
            $text = "ผลการสอบของ โครงงาน " . $name_project . " " . $text1 . " " . $text2 . " ได้คะแนน " . $totalScore . " คะแนน กรุณาตรวจสอบคะแนนในตารางสอบ";
            $subject = "ผลการสอบ";
            foreach ($email_student as $key => $value) {
                $SendMailController->sendMail($value, $text, $subject);
            }

            $response = [
                'success' => true,
                'message' => 'บันทึกคะแนนเสร็จสมบูรณ์',
                'reload' => true,
            ];
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
}



