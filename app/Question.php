<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['id', 'user_id', 'body', 'created_at', 'updated_at'];
}
