<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('thread')->insert([
            [
                'id_user' => 4,
                'caption' => 'Belajar Laravel 11',
                'isi' => 'Belajar Laravel versi terbaru dengan fitur modern.', // Isi wajib
                'like' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 5,
                'caption' => 'Penggunaan Tailwind CSS',
                'isi' => 'Cara menggunakan Tailwind CSS dalam proyek Laravel.',
                'like' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 6,
                'caption' => 'Membangun REST API',
                'isi' => 'Langkah-langkah membuat REST API dengan Laravel.',
                'like' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 7,
                'caption' => 'Optimasi Query Database',
                'isi' => 'Tips optimasi query untuk performa database.',
                'like' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 1,
                'caption' => 'Keamanan Web dengan Laravel',
                'isi' => 'Teknik meningkatkan keamanan aplikasi web.',
                'like' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);        
    }
}
