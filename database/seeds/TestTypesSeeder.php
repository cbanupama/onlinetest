<?php

use Illuminate\Database\Seeder;

class TestTypesSeeder extends Seeder
{
    protected $types = [
        'Final Exam', 'Class Test', 'Mid-Term Exam', 'Surprise Test'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->types as $type) {
            \App\TestType::updateOrCreate([
                'name' => $type,
                'slug' => str_slug($type)
            ]);
        }
    }
}
