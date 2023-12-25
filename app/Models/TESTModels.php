<?php

namespace App\Models;

use CodeIgniter\Model;

class TESTModels extends Model
{
    protected $table = 'test_list_table';

    protected $primaryKey = 'id_test_list';

    protected $allowedFields = ['id_project', 'email_director1', 'email_director2', 'type_test', 'location', 'date_test', 'time_test', 'status_test', 'id_score'];

}
