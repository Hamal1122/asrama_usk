<?php

namespace App\Http\Controllers;

use App\Models\berkas;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
  public function berkas(){
    $data = berkas::all();
    return view('/berkas/berkas', compact('data')); 
  } 

  public function tambah(Request $request)
  {
      berkas::create($request->all());
      return redirect()->route('kamarsaya')->with('berhasil','Data Telah Berhasil Ditambahkan');
  }
}


