<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class kamarController extends Controller
{
  public function kamar(){
    return view('kamar'); 
  }
}

class GenderController extends Controller
{
  public function gender(){
    return view('gender'); 
  }
}


