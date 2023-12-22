<?php

namespace App\Controllers;

use App\Models\ProjectModels;
use App\Models\TimelistModels;

class TimelistContoller extends BaseController
{
    public function create_timelist($id_project = null)
    {
        $TimelistModels = new TimelistModels();
        $dayNames = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];
        $checkedCheckboxes = [];
        $temp_Data = $TimelistModels->where('id_project', $id_project)->findAll();
        foreach ($temp_Data as $value) {
            $TimelistModels->delete($value['id_time_list']);
        }
        // Loop for each hour
        for ($i = 9; $i <= 16; $i++) {
            // Loop for each day
            foreach ($dayNames as $day) {
                $temp_name = $day . ',' . $i;
                // Check if the checkbox with $temp_name is checked
                $isChecked = $this->request->getPost($temp_name) !== null;
                // Do something with the checkbox value
                if ($isChecked) {
                    // The checkbox is checked

                    // Add the checked checkbox to the array
                    $checkedCheckboxes[] = $temp_name;
                } else {
                    // The checkbox is not checked
                }
            }
        }
        foreach ($checkedCheckboxes as $checked) {
            $data_ = explode(',', $checked);
            $day = $data_[0];
            $hour = $data_[1];
            $TimelistModels->insert([
                'id_project' => $id_project,
                'date_' => $day,
                'time_number' => $hour
            ]);
        }

        $response = [
            'success' => true,
            'message' => "บันทึกข้อมูลเรียบร้อย",
            'reload' => true
        ];

        return $this->response->setJSON($response);
    }

    public function get_data_time($id_project = null)
    {
        $TimelistModels = new TimelistModels();
        $project_time = $TimelistModels->where('id_project', $id_project)->findAll();
        if ($project_time == null) {
            $project_time = [];
            $response = [
                'success' => false,
                'data' => $project_time
            ];
        } else {
            $response = [
                'success' => true,
                'data' => $project_time
            ];
        }

        return $this->response->setJSON($response);
    }

    public function create_timelist_teacher()
    {
        $TimelistModels = new TimelistModels();
        $dayNames = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];
        $checkedCheckboxes = [];
        $temp_Data = $TimelistModels->where('email_user', session()->get('email'))->findAll();
        foreach ($temp_Data as $value) {
            $TimelistModels->delete($value['id_time_list']);
        }
        // Loop for each hour
        for ($i = 9; $i <= 16; $i++) {
            // Loop for each day
            foreach ($dayNames as $day) {
                $temp_name = $day . ',' . $i;
                // Check if the checkbox with $temp_name is checked
                $isChecked = $this->request->getPost($temp_name) !== null;
                // Do something with the checkbox value
                if ($isChecked) {
                    // The checkbox is checked

                    // Add the checked checkbox to the array
                    $checkedCheckboxes[] = $temp_name;
                } else {
                    // The checkbox is not checked
                }
            }
        }
        foreach ($checkedCheckboxes as $checked) {
            $data_ = explode(',', $checked);
            $day = $data_[0];
            $hour = $data_[1];
            $TimelistModels->insert([
                'email_user' => session()->get('email'),
                'date_' => $day,
                'time_number' => $hour
            ]);
        }

        $response = [
            'success' => true,
            'message' => "บันทึกข้อมูลเรียบร้อย",
            'reload' => true
        ];

        return $this->response->setJSON($response);
    }
    public function get_data_time_teacher()
    {
        $TimelistModels = new TimelistModels();
        $project_time = $TimelistModels->where('email_user', session()->get('email'))->findAll();
        if ($project_time == null) {
            $project_time = [];
            $response = [
                'success' => false,
                'data' => $project_time
            ];
        } else {
            $response = [
                'success' => true,
                'data' => $project_time
            ];
        }

        return $this->response->setJSON($response);
    }


}



