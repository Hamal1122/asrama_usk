<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Beranda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
  // memanggil semua data yang ada di table beranda
  public function beranda()
  {
    $data = beranda::orderBy('id', 'desc')->get();
    $user = User::all();
    return view('dashboard', compact('data', 'user')); 
  }

   //mencari Postingan Berdasarkan id
  public function detail($id)
  {
    return view('post', [
      "post" => beranda::find($id)
    ]);
  }

// menampilkan view dasboard admin
  public function admin()
  {
    return view('dashboard_admin', [
      "title" => "Beranda",
    ]); 
  }

  // menampilkan view informasi
  public function informasi()
  {
    $data = beranda::orderBy('id', 'desc')->get();
    return view('manage_informasi', compact('data')); 
  }

  // menampilkan view tambah informasi
  public function tambahInformasi()
  {
    return view('tambah_informasi', [
      "title" => "Tambah Informasi",
    ]); 
  }


// menambah informasi
  public function tambah(Request $request)
  {
      beranda::create($request->all());
      return redirect()->route('manage_informasi')->with('berhasil','Selamat!!, Data Telah Berhasil Ditambahkan');
  }

  // menampilkan data yang mau di edit berdasarkan id
  public function show(Request $request, $id)
  {
    $data = beranda::find($id);
    return view('tampil_informasi', compact('data'));
  }

  // mengedit data berdasarkan id
  public function edit(Request $request, $id)
  {
    $data = beranda::find($id);
    $data->update($request->all());
    return redirect()->route('manage_informasi')->with('berhasil','Selamat!!, Data Telah Berhasil Di Update'); 
  }


  // menghapus data berdasarkan id
  public function delete($id)
  {
    $data = beranda::find($id);
    $data->delete($id);
    return redirect()->route('manage_informasi')->with('berhasil','Selamat!!, Data Telah Berhasil Di Hapus'); 
  }

}
