<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';

    protected $fillable = [
        'id_user',
        'id_thread',
        'komentar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class, 'id_thread');
    }

    
}
