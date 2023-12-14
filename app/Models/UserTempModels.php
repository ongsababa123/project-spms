<?php

namespace App\Models;

use CodeIgniter\Model;

class UserTempModels extends Model
{
    protected $table = 'user_temp_table';

    protected $primaryKey = 'id_user_temp';

    protected $allowedFields = ['email_user_temp' , 'name_user_temp' , 'lastname_user_temp' , 'phone_user_temp' ,'room_user_temp'];

}
