<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasFormatRupiah;


class kamar extends Model
{
 use HasFactory;
 use HasFormatRupiah;
 protected $table ='kamar';
 protected $primaryKey ='id';
 protected $guarded = [];
 public $timestamps = false;


public function gedung() 
{
  return $this->belongsTo(gedung::class);
}

}
