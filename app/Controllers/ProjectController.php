<?php

namespace App\Controllers;

use App\Models\UserTempModels;
use App\Models\UserModels;
use App\Models\ProjectModels;
use App\Models\TK01_Models;
use App\Models\FileModels;

use CodeIgniter\I18n\Time;

class ProjectController extends BaseController
{

    public function create_project_tk01()
    {
        helper(['form']);
        $FileModels = new FileModels();
        $TK01_Models = new TK01_Models();

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
            $data = [
                'name_project_th' => $this->request->getVar('name_book'),
                'name_project_eng' => $this->request->getVar('name_book_author'),

            ];
            $response = [
                'success' => false,
                'message' => 'เสร็จสิ้น',
                'reload' => false,
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

}

