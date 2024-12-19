<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artikel')->insert([
            [
                'id_user' => 1,
                'judul' => 'Panduan program diet sehat.',
                'id_kategori_artikel' => 1, 
                'isi' => 'Panduan lengkap program diet sehat.',
                'like' => 0,
                'status' => 'Diterima',
                'thumbnail' => 'thumbnail1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2,
                'judul' => 'Tips olahraga rutin.',
                'id_kategori_artikel' => 2, 
                'isi' => 'Tips menjaga kesehatan melalui olahraga.',
                'like' => 0,
                'status' => 'Review',
                'thumbnail' => 'thumbnail2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 3,
                'judul' => 'Langkah menjaga kesehatan.',
                'id_kategori_artikel' => 3, 
                'isi' => 'Langkah-langkah menjaga tubuh tetap sehat.',
                'like' => 0,
                'status' => 'Review',
                'thumbnail' => 'thumbnail3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);        
    }
}
