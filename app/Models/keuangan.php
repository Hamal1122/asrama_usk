<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use App\Traits\HasFormatRupiah;
use Illuminate\Support\Carbon;


class keuangan extends Model
{
 use HasFactory;
 use HasFormatRupiah;
 protected $table ='berkas';
 
 protected $guarded = [];
 public $timestamps = false;


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




