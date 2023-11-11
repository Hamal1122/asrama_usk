<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kamar extends Model
{
 use HasFactory;
 protected $table ='kamar';
 protected $guarded = [];
 public $timestamps = false;


public function gedung() 
{
  return $this->belongsTo(gedung::class);
}

}
