<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artikel')->insert([
            [
                
                'id_user' => 4,
                'judul' => 'Program Diet',
                'id_kategori_artikel' => 1,
                'isi' => 'Program Diet',
                'like' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
              
                'id_user' => 5,
                'judul' => 'Olahraga',
                'id_kategori_artikel' => 2,
                'isi' => 'Olahraga',
                'like' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'id_user' => 6,
                'judul' => 'Kesehatan',
                'id_kategori_artikel' => 3,
                'isi' => 'Kesehatan',
                'like' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
