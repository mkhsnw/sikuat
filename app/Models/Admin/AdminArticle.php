<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminArticle extends Model
{
    use HasFactory;

    protected $table = 'artikel'; // Nama tabel di database

    // Kolom yang dapat diisi
    protected $fillable = [
        'id_user',
        'judul',
        'id_kategori_artikel',
        'isi',
        'like',
        'thumbnail',
        'status',
    ];

    
}
