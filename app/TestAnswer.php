<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestAnswer extends Model
{
    protected $fillable = [
        'student_id', 'test_id', 'question_id', 'question_option_id'
    ];
}
