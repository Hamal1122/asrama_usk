<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $fillable = [
        'user_id',
        'kamar_id',
        'tanggal_masuk',
        'bukti_pembayaran',
        'status',
    ];
}
