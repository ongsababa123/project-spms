<?php

namespace App\Models;

use CodeIgniter\Model;

class TK04_Models extends Model
{
    protected $table = 'tk04_list_table';

    protected $primaryKey = 'id_tk_04';

    protected $allowedFields = ['id_file_04', 'status_tk_04'];

}
