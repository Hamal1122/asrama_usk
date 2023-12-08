<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Pagination\LengthAwarePaginator;

class pengawas extends Model
{
  use HasFactory;
  protected $table = 'pengawas';
  protected $primaryKey = 'id';
  protected $guarded = [];
  public $timestamps = true;



  public function gedung() 
    {
    return $this->belongsTo(gedung::class);
    }

}
