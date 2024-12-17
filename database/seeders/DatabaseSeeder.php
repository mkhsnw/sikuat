<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,            // UserSeeder dijalankan lebih dulu
            KategoriArtikelSeeder::class, // Jika diperlukan untuk id_kategori
            ArtikelSeeder::class,         // ArtikelSeeder dijalankan setelah user ada
            AdminSeeder::class,
            ThreadSeeder::class,
            ChallengeSeeder::class,
        ]);
    }
}
