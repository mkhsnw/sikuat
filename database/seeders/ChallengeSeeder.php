<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('challenge')->insert([
            ['nama_challenge' => 'Push Up', 'deskripsi' => 'Latihan kekuatan tubuh atas', 'poin' => 500, 'created_at' => now(), 'updated_at' => now()],
            ['nama_challenge' => 'Squat', 'deskripsi' => 'Latihan kekuatan kaki', 'poin' => 600, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
