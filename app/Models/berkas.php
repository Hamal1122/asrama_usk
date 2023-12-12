<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;


class berkas extends Model
{
 use HasFactory;
 protected $table ='berkas';
 
 protected $guarded = [];
 public $timestamps = false;


 public function user() 
{
  return $this->belongsTo(users::class);
}

public function pembayaran()
{
    return $this->hasMany(Pembayaran::class, 'berkas_id', 'id');
}

}




