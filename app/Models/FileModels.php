<?php

namespace App\Models;

use CodeIgniter\Model;

class FileModels extends Model
{
    protected $table = 'file_table';

    protected $primaryKey = 'id_file';

    protected $allowedFields = ['name_file', 'date_uploade'];

}
