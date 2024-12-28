<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = [
        'id_kategori_artikel',
        'id_user',
        'judul',
        'isi',
        'thumbnail',
        'like'
    ];

    public function kategori_artikel()
    {
        return $this->belongsTo(KategoriArtikel::class, 'id_kategori_artikel');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    
}