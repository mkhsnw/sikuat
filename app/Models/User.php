<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user'; // Pastikan nama tabel sesuai

    protected $fillable = [
        'username',
        'nama_user',
        'email',
        'password',
        'tanggal_lahir',
        'token', // Tambahkan jika kamu menyimpan token di sini
        'foto',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}