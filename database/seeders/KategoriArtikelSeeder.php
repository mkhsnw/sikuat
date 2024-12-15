<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_artikel')->insert([
            [
                'id' => 1,
                'nama_kategori' => 'Program Diet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nama_kategori' => 'Olahraga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nama_kategori' => 'Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
