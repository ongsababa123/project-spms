<?php

namespace App\Controllers;

use App\Models\ProjectModels;
use App\Models\ScoreModels;

class ScoreController extends BaseController
{

    public function index_scorepage($id_test = null, $id_project = null)
    {
        $ProjectModels = new ProjectModels();
        $data['project'] = $ProjectModels->where('id_project', $id_project)->first();
        $data['id_test'] = $id_test;

        echo view('layout/header');
        echo view('scorepage_test', $data);
    }

    public function create_scorepage($id_test = null, $id_project = null)
    {
        helper(['form']);
        $ScoreModels = new ScoreModels();
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



