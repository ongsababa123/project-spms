<?php

namespace App\Models;

use CodeIgniter\Model;

class TK05_Models extends Model
{
    protected $table = 'tk05_list_table';

    protected $primaryKey = 'id_tk_05';

    protected $allowedFields = ['id_score', 'id_file_05', 'id_file_present', 'email_director1', 'email_director2', 'status_tk_05'];

}
