<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    protected $table = 'user_table';

    protected $primaryKey = 'id_user';

    protected $allowedFields = ['email_user' , 'name_user' , 'lastname_user' , 'phone_user' ,'room_user', 'password_user' , 'key_pass_user' , 'status_user' , 'type_user'];

}
