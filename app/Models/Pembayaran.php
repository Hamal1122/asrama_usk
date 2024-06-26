<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Traits\HasFormatRupiah;

class Pembayaran extends Model
{
    use HasFactory;
    use HasFormatRupiah;

    protected $table = 'pembayaran';
    protected $fillable = [
        'user_id',
        'kamar_id',
        'tanggal_masuk',
        'tanggal_keluar',
        'bukti_pembayaran',
        'status',
    ];

    public static function boot()
    {
        parent::boot();

        // Event creating akan dipanggil sebelum entri baru disimpan
        static::creating(function ($pembayaran) {
            // Ambil id dari tabel berkas yang sesuai dan atur berkas_id
            $berkasId = berkas::max('id');
            $pembayaran->berkas_id = $berkasId;
        });
    }

    public function berkas() 
    {
      return $this->belongsTo(berkas::class, 'berkas_id', 'id');
    }

    public function user() 
    {
      return $this->belongsTo(users::class);
    }

    public function kamar() 
    {
      return $this->belongsTo(kamar::class);
    }
}
