<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\User;
use App\Models\kamar;
use App\Models\gedung;
use App\Models\pengawas;
use App\Models\pembayaran;
use App\Models\berkas;
use App\Models\Riwayat;
use App\Models\users;
use Dflydev\DotAccessData\Data;

class ProfileController extends Controller
{
  
  public function profile()
  {
    $userId = auth()->user()->id;
    $data = Riwayat::where('user_id', $userId)->get();
   return view('/profile/profile', compact('data'));
  }

  public function edit(){
    return view('/profile/edit_profile',  [
      "title" => "Profil",
    ]); 
  }
}