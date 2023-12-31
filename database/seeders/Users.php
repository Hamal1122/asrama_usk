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
        $data = [
            [
                'name' => 'admin',
                'email' => 'admin123@gmail.com',
                'nim' => '11111',
                'no_hp' => '081234567890',
                'role' => 0,
                'jenis_kelamin' => 'laki-laki',
                'password' => Hash::make('asramausk'),
            ],
            [
                'name' => 'mahasiswa',
                'email' => 'user123@gmail.com',
                'nim' => '22222',
                'no_hp' => '081234567898',
                'role' => 1,
                'jenis_kelamin' => 'laki-laki',
                'password' => Hash::make('mahasiswausk'),
            ],

            [
                'name' => 'Hamal',
                'email' => 'hamalrizky09@gmail.com',
                'nim' => '2008107010045',
                'no_hp' => '082292389762',
                'role' => 1,
                'jenis_kelamin' => 'laki-laki',
                'password' => Hash::make('hamal12345'),
            ]
        ];
        foreach ($data as $key => $value) {
            DB::table('users')->insert($value);
        }
    }
}
