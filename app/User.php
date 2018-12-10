<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'sts_number', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * User is a student with role student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne|null
     */
    public function student(): ?\Illuminate\Database\Eloquent\Relations\HasOne
    {
        if ($this->hasRole('student')) {
            return $this->hasOne(Student::class);
        }
    }

    /**
     * User is a teacher with role teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne|null
     */
    public function teacher(): ?\Illuminate\Database\Eloquent\Relations\HasOne
    {
        if ($this->hasRole('teacher')) {
            return $this->hasOne(Teacher::class);
        }
    }
}
