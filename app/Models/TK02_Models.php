<?php

namespace App\Models;

use CodeIgniter\Model;

class TK02_Models extends Model
{
    protected $table = 'tk02_list_table';

    protected $primaryKey = 'id_tk_02';

    protected $allowedFields = ['id_file_02' ,'id_file_present', 'status_tk_02'];

}
