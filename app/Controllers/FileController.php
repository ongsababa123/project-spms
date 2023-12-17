<?php

namespace App\Controllers;

use App\Models\FileModels;

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

}



