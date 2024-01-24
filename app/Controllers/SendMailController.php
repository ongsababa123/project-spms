<?php

namespace App\Controllers;

use App\Models\UserModels;

class SendMailController extends BaseController
{
    function sendMail($email_to, $text, $subject)
    {
        $to = $email_to;

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom($to, 'SPMS');

        $email->setSubject($subject);
        $email->setMessage($text);

        if ($email->send()) {
            $check = true;
        } else {
            $check = false;
        }

        return $check;
    }

    function getEmail_office($text, $subject)
    {
        $userModels = new UserModels();
        $data['users'] = $userModels
            ->where('type_user', 3)  // Filter by user type 3
            ->whereIn('status_user', [1, 2])  // Filter by status 1 or 2
            ->findAll();
        // var_dump($data['users']);
        foreach ($data['users'] as $user => $value) {
            $this->sendMail($value['email_user'], $text, $subject);
        }
    }

}



