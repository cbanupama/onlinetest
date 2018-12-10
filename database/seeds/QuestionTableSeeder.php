<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 500) as $index) {
            $question = \App\Question::create([
                'subject_id' => \App\Subject::inRandomOrder()->first()->id,
                'question'   => $faker->text
            ]);

            $answer = rand(1, 4);

            foreach (range(1, 4) as $value) {
                \App\QuestionOption::create([
                    'question_id' => $question->id,
                    'option'      => implode(' ', $faker->words(rand(2, 5))),
                    'is_answer'   => $value === $answer
                ]);
            }
        }
    }
}
