<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Pagination\LengthAwarePaginator;

class gedung extends Model
{
 use HasFactory;
 protected $table ='gedung';
 protected $guarded = [];
 public $timestamps = false;


 
public function Gedung() 
{
  return $this->hasMany(kamar::class);
}
}
