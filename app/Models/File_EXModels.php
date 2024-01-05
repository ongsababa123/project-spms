<?php

namespace App\Models;

use CodeIgniter\Model;

class File_EXModels extends Model
{
    protected $table = 'file_ex_table';

    protected $primaryKey = 'id_ex_file';

    protected $allowedFields = ['id_file', 'type_doc'];

}
