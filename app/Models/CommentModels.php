<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModels extends Model
{
    protected $table = 'comment_table';

    protected $primaryKey = 'id_comment';

    protected $allowedFields = ['comment' , 'id_file' , 'id_project', 'id_tk', 'type', 'date_time'];

}
