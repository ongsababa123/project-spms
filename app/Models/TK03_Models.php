<?php

namespace App\Models;

use CodeIgniter\Model;

class TK03_Models extends Model
{
    protected $table = 'tk03_list_table';

    protected $primaryKey = 'id_tk_03';

    protected $allowedFields = ['id_file_03' , 'id_file_present', 'status_tk_03'];

}
