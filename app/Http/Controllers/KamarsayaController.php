<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class kamarsayaController extends Controller
{
  public function kamarsaya(){
    return view('/kamarsaya/kamarsaya',  [
      "title" => "Kamar Saya",
    ]); 
  }
}