<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use App\Traits\HasFormatRupiah;

class beranda extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $table = 'beranda';
    protected $guarded = [];
    public $timestamps = true;
}
