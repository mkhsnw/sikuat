<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'nama_admin' => 'Super Admin',
            'username' => 'admin',
            'password' => Hash::make('admin'), // Password di-hash dengan Hash::make()
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
