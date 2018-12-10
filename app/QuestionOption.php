<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $fillable = [
        'question_id', 'option', 'is_answer'
    ];
}
