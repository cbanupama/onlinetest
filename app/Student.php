<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id', 'academic_year', 'class', 'section', 'roll_number'
    ];

    /**
     * Student is an user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Has answers
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function testAnswer(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(TestAnswer::class);
    }
}
