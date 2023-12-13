<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModels extends Model
{
    protected $table = 'list_project_table';

    protected $primaryKey = 'id_project';

    protected $allowedFields = ['name_project_th' , 'name_project_eng' , 'email_student' , 'email_teacher' , 'name_consult' , 'id_tk01' , 'id_tk02' , 'id_tk03', 'id_tk04', 'id_tk05', 'status_project'];

}
