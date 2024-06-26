<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use App\Traits\HasFormatRupiah;



class berkas extends Model
{
 use HasFactory;
 use HasFormatRupiah;
 protected $table ='berkas';
 
 protected $guarded = [];
//  public $timestamps = false;


 public function user() 
{
  return $this->belongsTo(users::class);
}

public function pembayaran()
{
    return $this->hasMany(Pembayaran::class, 'berkas_id', 'id');
}

}




