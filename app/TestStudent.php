<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestStudent extends Model
{
    protected $fillable = [
        'test_id', 'student_id', 'is_active'
    ];

    /**
     * this belongs to a test
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function test(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Test::class);
    }

    /**
     * this belongs to a student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
