<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 100) as $index) {
            $user = \App\User::create([
                'name'       => $faker->name,
                'sts_number' => $faker->numerify('#############'),
                'password'   => bcrypt('123456')
            ]);

            $user->assignRole('student');

            \App\Student::create([
                'user_id'       => $user->id,
                'academic_year' => '2017-2018',
                'class'         => rand(1, 10),
                'section'       => str_random(1),
                'roll_number'   => $faker->randomDigit
            ]);
        }
    }
}
