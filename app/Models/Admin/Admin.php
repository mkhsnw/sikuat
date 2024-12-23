<?php

namespace App\Models\Admin;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    protected $table = 'admin';
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password'];

    // Mutator to hash the password before saving
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}