<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    protected $users = [
        [
            'name'  => 'Admin User',
            'email' => 'admin@example.com'
        ],
        [
            'name'  => 'Teacher User',
            'email' => 'teacher@example.com'
        ],
        [
            'name'       => 'Student User',
            'sts_number' => '1234567890123'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->users as $user) {
            \App\User::updateOrCreate($user, ['password' => bcrypt('123456')]);
        }
    }
}
