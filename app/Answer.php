<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['id', 'question_id', 'user_id', 'body', 'created_at', 'updated_at'];
}
