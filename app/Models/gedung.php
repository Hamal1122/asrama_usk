<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class gedung extends Model
{
 use HasFactory;
 protected $table ='gedung';
 protected $guarded = [];
 public $timestamps = false;
 protected $fillable   = ['id', 'nama'];
}
