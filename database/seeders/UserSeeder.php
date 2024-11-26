<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'username' => 'johndoe',
                'nama_user' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password123'),
                'tanggal_lahir' => '1990-01-01',
                'token' => mt_rand(10000, 99999),
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'janedoe',
                'nama_user' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'password' => Hash::make('password123'),
                'tanggal_lahir' => '1992-05-15',
                'token' => mt_rand(10000, 99999),
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'alicewong',
                'nama_user' => 'Alice Wong',
                'email' => 'alice@example.com',
                'password' => Hash::make('password123'),
                'tanggal_lahir' => '1995-07-20',
                'token' => mt_rand(10000, 99999),
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'bobsmith',
                'nama_user' => 'Bob Smith',
                'email' => 'bobsmith@example.com',
                'password' => Hash::make('password123'),
                'tanggal_lahir' => '1988-09-10',
                'token' => mt_rand(10000, 99999),
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'charliebrown',
                'nama_user' => 'Charlie Brown',
                'email' => 'charliebrown@example.com',
                'password' => Hash::make('password123'),
                'tanggal_lahir' => '1993-12-25',
                'token' => mt_rand(10000, 99999),
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'danielgreen',
                'nama_user' => 'Daniel Green',
                'email' => 'danielgreen@example.com',
                'password' => Hash::make('password123'),
                'tanggal_lahir' => '1997-03-03',
                'token' => mt_rand(10000, 99999),
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'emilywhite',
                'nama_user' => 'Emily White',
                'email' => 'emilywhite@example.com',
                'password' => Hash::make('password123'),
                'tanggal_lahir' => '1994-11-11',
                'token' => mt_rand(10000, 99999),
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
