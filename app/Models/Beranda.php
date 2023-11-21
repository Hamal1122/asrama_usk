<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class beranda extends Model
{
    use HasFactory;
    protected $table = 'beranda';
    protected $guarded = [];
    public $timestamps = true;
}
