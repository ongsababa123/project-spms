<?php

namespace App\Models;

use CodeIgniter\Model;

class TimelistModels extends Model
{
    protected $table = 'time_list_table';

    protected $primaryKey = 'id_time_list';

    protected $allowedFields = ['id_project','email_user', 'date_', 'time_number'];

}
