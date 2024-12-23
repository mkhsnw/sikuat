<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminChallenge extends Model
{
    use HasFactory;

    protected $table = 'challenge';

    protected $fillable = [
        'nama_challenge',
        'deskripsi',
        'poin',
        'created_at',
        'updated_at',
    ];
}
