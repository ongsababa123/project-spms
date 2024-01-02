<?php

namespace App\Models;

use CodeIgniter\Model;

class ScoreModels extends Model
{
    protected $table = 'score_table';

    protected $primaryKey = 'id_score';

    protected $allowedFields = [
        'id_test_list',
        'id_project',
        'score1_1',
        'score1_2',
        'score2_1',
        'score2_2',
        'score3_1',
        'score3_2',
        'score3_3',
        'score4_1',
        'score4_2',
        'score4_3',
        'score4_4',
        'score4_5',
        'score4_6',
        'score5_1',
        'score5_2',
        'score5_3',
        'score5_4',
        'score5_5',
        'score6_1',
        'score6_2',
    ];

}
