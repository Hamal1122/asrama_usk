<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\gedung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Pagination\LengthAwarePaginator;

class kamarController extends Controller
{
 

  public function tambah(Request $request)
  {
      gedung::create($request->all());
      return redirect()->route('manage_kamar')->with('berhasil','Data Telah Berhasil Ditambahkan');
  }


  public function tampil()
  {
    return view('/Kamar/tambah_gedung', [
      "title" => "Tambah Gedung",
    ]); 
  }

  public function gender(){
    return view('/Kamar/gender',  [
      "title" => "Kamar",
    ]);
  }

  public function manage(Request $request){

    $gedung = gedung::all();
    $kamar = kamar::all();
    return view('/Kamar/manage_kamar', compact('gedung'))->with('i',($request->input('page',1)-1));
  }

  public function tampilgedung($id)
  {
    $data = gedung::find($id);
    return view('/Kamar/tampil_gedung', compact('data'));
  }

  public function editgedung(Request $request, $id)
  {
    $data = gedung::find($id);
    $data->update($request->all());
    return redirect()->route('manage_kamar')->with('berhasil','Data Telah Berhasil Update');
  }

  public function deletegedung($id)
  {
    $data = gedung::find($id);
    $data->delete($id);
    return redirect()->route('manage_kamar')->with('berhasil','Data Telah Berhasil Di Hapus'); 
  }

  // menampilkan kamar yang ada didalam gedung berdasarkan id
  public function kamar($id)
  {
    return view('/Kamar/kamar', [
      "gedung" => gedung::find($id), 
    ]);
  }
}

  

  


