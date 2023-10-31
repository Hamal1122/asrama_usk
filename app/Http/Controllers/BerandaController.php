<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Beranda;

class BerandaController extends Controller
{
  public function beranda()
  {
    return view('dashboard', [
      "title" => "Beranda",
      "Beranda" => Beranda::all()
    ]); 
  }

  public function detail($slug)
  {
    return view('post', [
      "title" => "Single Post",
      "post" => Beranda::find($slug) //mencari Postingan Berdasarkan slug
    ]);
  }

  public function admin()
  {
    return view('dashboard_admin', [
      "title" => "Beranda",
    ]); 
  }

  public function informasi()
  {
    return view('manage_informasi', [
      "title" => "Manage Informasi",
    ]); 
  }


}