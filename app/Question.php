<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function initialize(array $config){
        parent::initialize($config);

        $this->setTable('questions');
        $this->setDisplayField('id');
        $this->PrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Answer', [
            'foreignKey' => 'question_id'
        ]);
    }
}
