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
      return redirect()->route('manage_kamar')->with('berhasil','Data Gedung Telah  Berhasil Ditambahkan');
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

  public function manage( Request $request){

    $gedung = gedung::all();
    return view('/Kamar/manage_kamar', compact('gedung'))->with('i',($request->input('page',1)-1));
  }

  public function updategedung($id)
  {
    $data = gedung::find($id);
    return view('/Kamar/edit_gedung', compact('data'));
  }

  public function editgedung(Request $request, $id)
  {
    $data = gedung::find($id);
    $data->update($request->all());
    return redirect()->route('manage_kamar')->with('berhasil','Data Gedung Telah Berhasil Update');
  }

  public function deletegedung($id)
  {
    $data = gedung::find($id);
    $data->delete($id);
    return redirect()->route('manage_kamar')->with('berhasil','Data gedung Telah Berhasil Di Hapus'); 
  }

  // menampilkan kamar yang ada didalam gedung berdasarkan id 
  public function isigedung($gedung_id , Request $request)
  { 
    $kamar = kamar::where('gedung_id', $gedung_id)->get();
    return view('/Kamar/kamar', compact('kamar',))->with('i',($request->input('page',1)-1));
  }

  public function tambahkamar(Request $request)
  {
      kamar::create($request->all());
      return redirect()->route('manage_kamar')->with('berhasil','Data Kamar Telah Berhasil Ditambahkan');
  }

  public function formtambahkamar()
  {
    $ged = gedung::all();
    return view('/Kamar/tambah_kamar', compact('ged')); 
  }

  public function updatekamar($id)
  {
    $ged = gedung::all();
    $data = kamar::find($id);
    return view('/Kamar/edit_kamar', compact('data','ged'));
  }

  public function editkamar(Request $request, $id)
  {
    $data = kamar::find($id);
    $data->update($request->all());
    return redirect()->route('manage_kamar')->with('berhasil','Data Kamar Telah Berhasil Update');
  }

  public function deletekamar($id)
  {
    $data = kamar::find($id);
    $data->delete($id);
    return redirect()->route('manage_kamar')->with('berhasil','Data Kamar Telah Berhasil Di Hapus'); 
  }
}

  

  


