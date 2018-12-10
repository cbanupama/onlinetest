<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'subject_id', 'teacher_id', 'test_type_id', 'name', 'duration'
    ];

    /**
     * Test belongs to subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * There can be a teacher assigned to test
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Test has a test type
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function testType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TestType::class);
    }

    /**
     * Get all test questions
     *
     * @return \Illuminate\Support\Collection
     */
    public function getQuestionsAttribute()
    {
        $questions = collect();
        $testQuestions = TestQuestion::where('test_id', $this->id)->get();
        foreach ($testQuestions as $testQuestion) {
            $questions->push($testQuestion->question);
        }
        return $questions;
    }
}
