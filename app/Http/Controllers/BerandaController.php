<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Beranda;
use App\Models\gedung;
use App\Models\kamar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
  // memanggil semua data yang ada di table beranda
  public function beranda()
  {
    $data = beranda::orderBy('id', 'desc')->get();
    return view('/beranda/dashboard', compact('data'));
  }

  //mencari Postingan Berdasarkan id
  public function detail($id)
  {
    return view('/beranda/post', [
      "post" => beranda::find($id)
    ]);
  }

  // menampilkan view dasboard admin
  public function admin()
  {
    $jumlah_gedung = gedung::all()->count();
    $jumlah_kamar = kamar::all()->count();
    $jumlah_postingan = beranda::all()->count();
    return view('/beranda/dashboard_admin', compact('jumlah_gedung', 'jumlah_kamar', 'jumlah_postingan'));
  }

  // menampilkan view informasi
  public function informasi()
  {
    $data = beranda::orderBy('id', 'desc')->get();
    return view('/manage informasi/manage_informasi', compact('data'));
  }

  // menampilkan view tambah informasi
  public function tambahInformasi()
  {
    return view('/manage informasi/tambah_informasi', [
      "title" => "Tambah Informasi",
    ]);
  }


  // menambah data
  public function tambah(Request $request)
  {
    beranda::create($request->all());
    return redirect()->route('manage_informasi')->with('berhasil', 'Data Telah Berhasil Ditambahkan');
  }

  // menampilkan data yang mau di edit berdasarkan id
  public function show(Request $request, $id)
  {
    $data = beranda::find($id);
    return view('/manage informasi/tampil_informasi', compact('data'));
  }

  // mengedit data berdasarkan id
  public function edit(Request $request, $id)
  {
    $data = beranda::find($id);
    $data->update($request->all());
    return redirect()->route('manage_informasi')->with('berhasil', 'Data Telah Berhasil Di Update');
  }


  // menghapus data berdasarkan id
  public function delete($id)
  {
    $data = beranda::find($id);
    $data->delete($id);
    return redirect()->route('manage_informasi')->with('berhasil', 'Data Telah Berhasil Di Hapus');
  }
}
