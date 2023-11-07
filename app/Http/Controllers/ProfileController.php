<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\User;
use Dflydev\DotAccessData\Data;

class ProfileController extends Controller
{
  public function profile(){
    $data = user::all();
    return view('/profile/profile', compact('data'));
  }

  public function edit(){
    return view('/profile/edit_profile',  [
      "title" => "Profil",
    ]); 
  }
}