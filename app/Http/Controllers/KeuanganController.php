<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\kamar;
use App\Models\gedung;
use App\Models\pengawas;
use App\Models\pembayaran;
use App\Models\berkas;
use App\Models\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class keuanganController extends Controller
{
  public function index(Request $request)
  {
    if($request->has('search')){
      $data = Pembayaran::whereHas('user', function ($query) use ($request) {
          $query->where('nim', 'LIKE', '%' . $request->search . '%');
      })->get();

      if ($berkas->isEmpty()) 
      {
          return view ('/berkas/eror');
      }

  }else{
  $data = Pembayaran::orderBy('id', 'desc')->get();
  }
  return view('/manage_keuangan/manage_keuangan', compact('data'))->with('i', ($request->input('page', 1) - 1));
  }

  
}

