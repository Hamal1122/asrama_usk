<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

}