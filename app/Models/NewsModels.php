<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModels extends Model
{
    protected $table = 'news_list_table';

    protected $primaryKey = 'id_news_list';

    protected $allowedFields = ['details_news' , 'image_news' , 'status_news'];

}
