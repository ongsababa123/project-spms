<?php

namespace App\Models;

use CodeIgniter\Model;

class TK01_Models extends Model
{
    protected $table = 'tk01_list_table';

    protected $primaryKey = 'id_tk_01';

    protected $allowedFields = ['id_file_01' , 'status_tk_01'];

}
