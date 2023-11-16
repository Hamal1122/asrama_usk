<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\User;
use Illuminate\Support\Facades\Hash;



class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'name' => 'admin',
            'email' => 'admin123@gmail.com',
            'nim' => '11111',
            'no_hp' => '081234567890',
            'jenis_kelamin' => 'laki-laki',
            'password' => Hash::make('asramausk'),
          ],
        [
            'name' => 'mahasiswa',
            'email' => 'user123@gmail.com',
            'nim' => '22222',
            'no_hp' => '081234567898',
            'jenis_kelamin' => 'laki-laki',
            'password' => Hash::make('mahasiswausk'),
        ]
        ];
    }
}
