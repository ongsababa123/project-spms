<?php

namespace App\Controllers;

use App\Models\NewsModels;

class NewsController extends BaseController
{

    public function create_news()
    {
        $NewsModels = new NewsModels();
        $image_news = $this->request->getFile('uploadImage');
        $detail_news = $this->request->getVar('detail_news');
        if ($image_news->getError() == 4 && $detail_news == '') {
            $response = [
                'success' => false,
                'message' => 'ผิดพลาด',
                'reload' => false,
                'image_error' => 'กรุณากรอกข้อมูลอย่างใดอย่างหนึ่ง'
            ];
        } else {
            $data = [
                'status' => 0,
                'details_news' => $this->request->getVar('detail_news'),
            ];

            if ($image_news->isValid() && !$image_news->hasMoved()) {
                $validationRules = [
                    'uploadImage' => 'max_size[uploadImage,10240]', // 10MB in kilobytes
                ];
                // Validate the input
                if (!$this->validate($validationRules)) {
                    $response = [
                        'success' => false,
                        'message' => 'ผิดพลาด',
                        'reload' => false,
                        'image_error' => 'ไฟล์จะต้องมีขนาดต่ำกว่า 10MB'
                    ];
                    return $this->response->setJSON($response);
                }
                $minFileSize = 1024; // 1MB in kilobytes
                if ($image_news->getSize() >= $minFileSize) {
                    if ($image_news->isValid() && !$image_news->hasMoved()) {
                        $imageData = file_get_contents($image_news->getTempName()); // Read image file data
                        $base64ImageData = base64_encode($imageData);
                        $data['image_news'] = $base64ImageData;
                    }
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'ผิดพลาด',
                        'reload' => false,
                        'image_error' => 'ไฟล์จะต้องมีขนาดอย่างน้อย 1MB'
                    ];
                    return $this->response->setJSON($response);
                }
            }
            $check = $NewsModels->save($data);
            if ($check) {
                $response = [
                    'success' => true,
                    'message' => 'สร้างข้อมูลสำเร็จ',
                    'reload' => true,
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

    public function change_status_new($id_news_list = null, $status = null)
    {
        helper(['form']);
        $NewsModels = new NewsModels();
        $data = [
            'status_news' => $status,
        ];

        $check = $NewsModels->update($id_news_list, $data);
        if ($check) {
            $response = [
                'success' => true,
                'message' => 'อัปเดตสถานะสำเร็จ',
                'reload' => true,
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'error',
                'reload' => false,
            ];
        }

        return $this->response->setJSON($response);
    }
    public function get_data_table_news()
    {
        $NewsModels = new NewsModels();
        $totalRecords = $NewsModels->countAllResults();

        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];

        // Sorting
        $orderColumnIndex = $this->request->getVar('order')[0]['column'];
        $orderDirection = $this->request->getVar('order')[0]['dir'];
        $orderColumns = ['id_news_list','details_news','image_news','status_news']; // Add more columns as needed
        $orderBy = $orderColumns[$orderColumnIndex] . ' ' . $orderDirection;

        $NewsModels->orderBy($orderBy);

        if (!empty($searchValue)) {
            $NewsModels->groupStart()
                ->like('details_news', $searchValue)
                ->groupEnd();
        }

        $recordsFiltered = $totalRecords;
        $data = $NewsModels->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }

}

