<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionEntry extends Model
{
    protected $_accessible = [
        'user_id' => true,
        'body' => true,
        'created' => true,
        'modifed' => true
    ];
}
