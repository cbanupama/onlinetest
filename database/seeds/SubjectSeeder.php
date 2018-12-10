<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    protected $subjects = [
        'Kannada', 'English', 'Hindi', 'Social Science', 'Science', 'Mathematics'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->subjects as $subject) {
            \App\Subject::firstOrCreate([
                'name' => $subject,
                'slug' => str_slug($subject)
            ]);
        }
    }
}
