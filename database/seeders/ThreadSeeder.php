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
                'like' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 5,
                'caption' => 'Penggunaan Tailwind CSS',
                'like' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 6,
                'caption' => 'Membangun REST API',
                'like' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 7,
                'caption' => 'Optimasi Query Database',
                'like' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 8,
                'caption' => 'Keamanan Web dengan Laravel',
                'like' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
