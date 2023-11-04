<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class beranda extends Model
{
 use HasFactory;
 protected $table ='beranda';
 protected $guarded = [];
 public $timestamps = false;
}

        

    // public static function all()
    // {
    //     return collect(self::$data);
    // }

    // public static function find($id)
    // {
    //     $beranda = static::all();
    //     return $beranda->firstwhere('id', $id); //mencari yang pertama kali ditemukan dengan slug yang sama
    // }

