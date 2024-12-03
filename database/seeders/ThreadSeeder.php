
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
                'id_user' => 1,
                'caption' => 'Belajar Laravel 11',
                'isi' => 'Laravel 11 memberikan banyak fitur baru yang sangat membantu pengembangan web modern.',
                'like' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2,
                'caption' => 'Penggunaan Tailwind CSS',
                'isi' => 'Tailwind CSS sangat mempermudah dalam membuat desain responsif tanpa menulis banyak CSS manual.',
                'like' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 3,
                'caption' => 'Membangun REST API',
                'isi' => 'REST API dengan Laravel sangat mudah untuk diimplementasikan dan terintegrasi dengan frontend.',
                'like' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 12,
                'caption' => 'Optimasi Query Database',
                'isi' => 'Menulis query yang efisien akan sangat mempengaruhi performa aplikasi berbasis database.',
                'like' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 5,
                'caption' => 'Keamanan Web dengan Laravel',
                'isi' => 'Laravel menyediakan banyak fitur keamanan seperti CSRF Protection, XSS Protection, dan encryption yang bisa digunakan dengan mudah.',
                'like' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
