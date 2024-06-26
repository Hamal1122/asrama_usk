<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Beranda;
use App\Models\gedung;
use App\Models\kamar;
use App\Models\User;
use App\Models\Users;
use App\Models\berkas;
use App\Models\riwayat;
use App\Models\keuangan;
use App\Models\Pembayaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
  // memanggil semua data yang ada di table beranda
  public function beranda()
  {
    $title = ['beranda'];
    $data = beranda::orderBy('id', 'desc')->get();
    return view('/beranda/dashboard', compact('data', 'title'));
  }

  //mencari Postingan Berdasarkan id
  public function detail($id)
  {
    return view('/beranda/post', [
      "post" => beranda::find($id)
    ]);
  }

  // menampilkan view dasboard admin
  public function admin(Request $request)
  {
    $jumlah_kipk = berkas::where('kategori', 'KIP')->count();
    $jumlah_reguler = berkas::where('kategori', 'Reguler')->count();
    $jumlah_internasional = berkas::where('kategori', 'Internasional')->count();
    $lasttransaction = riwayat::orderBy('id', 'desc')->take(5)->get();
    $chart = riwayat::selectRaw('YEAR(created_at) as year,MONTH(created_at) as month, SUM(harga) as count')
    ->where('created_at', '>=', Carbon::now()->subYears(4))
    ->groupBy('year', 'month')
    ->orderBy('year', 'asc')
    ->orderBy('month', 'asc')
    ->get()
    ->toArray();


    $jumlah_gedung = gedung::all()->count();
    $jumlah_kamar = kamar::all()->count();
    $jumlah_postingan = beranda::all()->count();
    $jumlah_pengguna = Users::where('role', 1)->count();
    $pengguna_aktif = pembayaran::orderBy('id', 'desc')->take(5)->get();
    $jumlah_pengguna_aktif = pembayaran::where('status', 1)->count();
    $unverified = berkas::orderBy('id', 'desc')->take(5)->get();
    return view('/beranda/dashboard_admin', compact('jumlah_gedung', 'jumlah_kamar', 'jumlah_postingan', 'pengguna_aktif', 'jumlah_pengguna', 'unverified','jumlah_pengguna_aktif', 'jumlah_kipk','jumlah_reguler', 'jumlah_internasional','lasttransaction', 'chart' ))->with('i', ($request->input('page', 1) - 1));
  }

  // menampilkan view informasi
  public function informasi()
  {
    $data = beranda::orderBy('id', 'desc')->get();
    return view('/manage informasi/manage_informasi', compact('data'));
  }

  public function main()
  {
    return view('/landingpage/landing');
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
