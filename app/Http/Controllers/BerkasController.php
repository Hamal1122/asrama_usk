<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BerkasController extends Controller
{
  public function berkas(){
    return view('berkas', [
      "title" => "Berkas",
    ]); 
  }

  public function manage(){
    return view('manage_berkas', [
      "title" => "Manage Berkas",
    ]); 
  }
}


