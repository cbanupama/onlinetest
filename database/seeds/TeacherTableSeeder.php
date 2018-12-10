<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 10) as $index) {
            $user = \App\User::create([
                'name'     => $faker->name,
                'email'    => $faker->safeEmail,
                'password' => bcrypt('123456')
            ]);

            $user->assignRole('teacher');

            \App\Teacher::create([
                'user_id'       => $user->id,
                'academic_year' => '2017-2018',
                'class'         => rand(1, 10)
            ]);
        }
    }
}
