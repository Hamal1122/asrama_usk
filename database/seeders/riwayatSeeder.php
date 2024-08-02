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
            'user_id' => 2, // Pastikan user dengan ID ini ada
            'kamar_id' => 1, // Pastikan kamar dengan ID ini ada
            'tanggal_masuk' => Carbon::now()->subDays(3)->toDateString(), //input 3 hari sebelum hari ini
            'tanggal_keluar' => Carbon::now()->toDateString(), //input hari ini
            'kategori' => 'KIP',
            'status' => 0,
            'harga' => 2400000,
            'jeniskamar' => '4orang',
            'durasi' => '1tahun',
            'nomor_resi' => 'COBA11'
        ]);
    }
}
