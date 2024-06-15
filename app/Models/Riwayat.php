<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\Users;
use App\Models\Kamar;
use Illuminate\Support\Facades\DB;
use App\Traits\HasFormatRupiah;
use Illuminate\Support\Facades\Mail;
use App\Mail\habisSewa;

class Riwayat extends Model
{
    use HasFactory;
    use HasFormatRupiah;

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

            $updatedRows = DB::table('riwayat')
                ->where('tanggal_keluar', '=', $today)
                ->update(['status' => 1]);

            if ($updatedRows) {
                $updatedRiwayats = $this->where('tanggal_keluar', '=', $today)->get();
                foreach ($updatedRiwayats as $riwayat) {
                    $user = $riwayat->user;
                    Mail::to($user->email)->send(new habisSewa($riwayat));
                }
            }

            DB::commit();
            return response()->json([
                'message' => 'Riwayat berhasil diupdate dan email telah dikirim'
            ], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Riwayat gagal diupdate'
            ], 400);
        }
    }
}
