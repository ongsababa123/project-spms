<?php

namespace App\Models;

use CodeIgniter\Model;

class UserTempModels extends Model
{
    protected $table = 'user_temp_table';

    protected $primaryKey = 'id_user';

    protected $allowedFields = ['email_user' , 'name_user' , 'lastname_user' , 'phone_user' ,'room_user'];

}
