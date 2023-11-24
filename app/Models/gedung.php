<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Pagination\LengthAwarePaginator;

class gedung extends Model
{
  use HasFactory;
  protected $table = 'gedung';
  protected $primaryKey = 'id';
  protected $guarded = [];
  public $timestamps = true;



  public function kamar()
  {
    return $this->hasMany(kamar::class);
  }
}
