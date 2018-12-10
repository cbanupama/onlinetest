<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
      'subject_id', 'question'
    ];

    /**
     * Question has multiple options
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(QuestionOption::class);
    }
}
