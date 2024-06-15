<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RiwayatSeeder extends Seeder
{
    public function run()
    {
        DB::table('riwayat')->insert([
            'user_id' => 3, // Pastikan user dengan ID ini ada
            'kamar_id' => 1, // Pastikan kamar dengan ID ini ada
            'tanggal_masuk' => Carbon::now()->subDays(3)->toDateString(),
            'tanggal_keluar' => Carbon::now()->toDateString(),
            'kategori' => 'KIP',
            'status' => 0,
            'harga' => 2400000,
            'jeniskamar' => '4orang',
            'durasi' => '1tahun',
        ]);
    }
}
