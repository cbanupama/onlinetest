<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    protected $roles = [
        'admin', 'teacher', 'student', 'parent'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->roles as $role) {
            \Spatie\Permission\Models\Role::firstOrCreate(['name' => $role]);
        }
    }
}
