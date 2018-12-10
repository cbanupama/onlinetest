<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(TestTypesSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
    }
}