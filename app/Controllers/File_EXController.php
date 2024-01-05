<?php

namespace App\Controllers;

use App\Models\FileModels;
use App\Models\File_EXModels;
use CodeIgniter\I18n\Time;

class File_EXController extends BaseController
{
    public function openfile_EX($id_file = null)
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

    public function create_file_ex()
    {
        $FileModels = new FileModels();
        $File_EXModels = new File_EXModels();
        helper(['form']);
        helper('filesystem');

        $file_ex_doc = $this->request->getFile('file_ex_doc');
        if ($file_ex_doc->isValid() && !$file_ex_doc->hasMoved()) {
            $newName = $file_ex_doc->getClientName();
            $currentDateTime = Time::now();

            $type_doc = $this->request->getVar('type_doc');
            $check_type = $File_EXModels->where('type_doc', $type_doc)->first();

            if ($check_type) {
                //edit
                $del_path = 'public/uploads/' . $check_type['id_file'] . '/';
                delete_files($del_path, false); // Delete files into the folder
                $file_ex_doc->move(ROOTPATH . 'public/uploads/' . $check_type['id_file'], $newName);
                $file_update = [
                    'name_file' => $newName,
                    'date_uploade' => $currentDateTime,
                ];
                $FileModels->update($check_type['id_file'], $file_update);

                $response = [
                    'success' => true,
                    'message' => 'อัปโหลดไฟล์เรียบร้อย',
                    'reload' => true,
                ];
            } else {
                //create
                $FileModels->insert([
                    'name_file' => $newName,
                    'date_uploade' => $currentDateTime,
                ]);
                $id_file = $FileModels->insertID();
                $file_ex_doc->move(ROOTPATH . 'public/uploads/' . $id_file, $newName);
                $File_EXModels->insert([
                    'id_file' => $id_file,
                    'type_doc' => $type_doc,
                ]);
                $response = [
                    'success' => true,
                    'message' => 'อัปโหลดไฟล์เรียบร้อย',
                    'reload' => true,
                ];
            }
        } else {
            $response = [
                'success' => false,
                'message' => 'โปรดอัปโหลดไฟล์ก่อน',
                'reload' => false,
            ];
        }
        return $this->response->setJSON($response);

    }

}



