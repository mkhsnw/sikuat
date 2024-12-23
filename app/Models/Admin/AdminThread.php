<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminThread extends Model
{
    protected $table = 'thread'; // Nama tabel di database

    // Kolom yang dapat diisi
    protected $fillable = [
        'id',
        'id_user',
        'caption',
        'isi',
        'like',
        'created_at',
        'updated_at',
    ];
}
