<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use app\Models\Users;
use App\Models\Kamar;
use Illuminate\Support\Facades\DB;

class Riwayat extends Model
{
    use HasFactory;

    protected $table = 'riwayat';
    protected $fillable = [
        'user_id',
        'kamar_id',
        'tanggal_masuk',
        'tanggal_keluar',
        'kategori',
        'status',
        'harga',
        'jeniskamar',
        'durasi',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }
    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
    public function updateRiwayat()
    {
        DB::beginTransaction();
        try {
            $today = Carbon::now()->toDateString();

            DB::table('riwayat')
                ->where('tanggal_keluar', '=', $today)
                ->update(['status' => 1]);

            DB::commit();
            return response()->json([
                'message' => 'Riwayat berhasil diupdate'
            ], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Riwayat gagal diupdate'
            ], 400);
        }


    }
    
}
