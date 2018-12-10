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

    /**
     * Get the right answer to question
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getAnswerAttribute(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(QuestionOption::class)->where('is_answer', true);
    }
}
