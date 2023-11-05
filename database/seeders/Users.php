<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin123@gmail.com',
            'nim' => '11111',
            'no_hp' => '081234567890',
            'role' => 'admin',
            'jenis_kelamin' => 'laki-laki',
            'password' => Hash::make('asramausk'),
          ]);
    }
}
