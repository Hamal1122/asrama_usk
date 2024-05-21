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

class kamarController extends Controller
{


  public function tambah(Request $request)
  {
    gedung::create($request->all());
    return redirect()->route('manage_kamar')->with('berhasil', 'Data Gedung Telah  Berhasil Ditambahkan');
  }


  public function tampil()
  {
    return view('/Kamar/tambah_gedung', [
      "title" => "Tambah Gedung",
    ]);
  }


  public function manage(Request $request)
{
  $ged = gedung::all();
    // Mendapatkan input pencarian dari form
    $search = $request->input('search');

    // Query untuk mencari gedung berdasarkan nama
    $gedung = Gedung::when($search, function ($query) use ($search) {
        return $query->where('nama', 'LIKE', '%' . $search . '%');
    })->withCount('kamar')->paginate(5);
    
    // menghitung jumlah kamar
    foreach ($gedung as $g) {
      $g->jumlahkamar = Kamar::where('gedung_id', $g->id)->count();
    }
    $paginate = \App\Models\gedung::paginate(5);

    return view('/Kamar/manage_kamar', compact('gedung', 'ged', 'paginate'))->with('i', ($request->input('page', 1) - 1));
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
    return redirect()->route('manage_kamar')->with('berhasil', 'Data Gedung Telah Berhasil Update');
  }

  public function deletegedung($id)
  {
    $data = gedung::find($id);
    $data->delete($id);
    return redirect()->route('manage_kamar')->with('berhasil', 'Data gedung Telah Berhasil Di Hapus');
  }

  // menampilkan kamar yang ada didalam gedung berdasarkan id 
  public function isigedung($gedung_id, Request $request)
  {
    $pengawas = pengawas::where('gedung_id', $gedung_id)->get();
    $kamar = kamar::where('gedung_id', $gedung_id)->get();
    foreach ($kamar as $k) {
      $k->jumlahpenghuni = pembayaran::where('kamar_id', $k->id)->count();
    }
    session::put('halaman_url', request()->fullUrl()); // redirect halaman setelah update
    return view('/Kamar/kamar', compact('kamar','pengawas'))->with('i', ($request->input('page', 1) - 1));
  }

  public function tambahkamar(Request $request)
  {
    kamar::create($request->all());
    return redirect()->route('manage_kamar')->with('berhasil', 'Data Kamar Telah Berhasil Ditambahkan');
  }

  public function formtambahkamar()
  {
    $ged = gedung::all();
    return view('kamar/tambah_kamar', compact('ged'));
  }

  public function updatekamar($id)
  {
    $ged = gedung::all();
    $data = kamar::find($id);
    return view('/Kamar/edit_kamar', compact('data', 'ged'));
  }

  public function editkamar(Request $request, $id)
  {
    $data = kamar::find($id);
    $data->update($request->all());
    if (session('halaman_url')) {
      return redirect(session('halaman_url'))->with('berhasil', 'Data Kamar Telah Berhasil Update');
    }
    return redirect()->route('manage_kamar')->with('berhasil', 'Data Kamar Telah Berhasil Update');
  }

  public function deletekamar($id)
  {
    $data = kamar::find($id);
    $data->delete($id);
    if (session('halaman_url')) {
      return redirect(session('halaman_url'))->with('berhasil', 'Data Kamar Telah Berhasil Update');
    }
    return redirect()->route('manage_kamar')->with('berhasil', 'Data Kamar Telah Berhasil Update');
  }

  public function detailkamar($id)
  {
    $data = kamar::find($id);
    $penghuni = $data->penghuni;
    return view('/Kamar/detail_kamar', compact('data', 'penghuni'));
  }

  public function semuagedung(Request $request)
  {
    $gedung = gedung::all();
    foreach ($gedung as $g) {
      $g->jumlahkamar = Kamar::where('gedung_id', $g->id)->count();
    }
    return view('/Kamar/semua_gedung', compact('gedung'));
  }

  public function semuakamar($gedung_id, Request $request)
  {
    $pengawas = pengawas::where('gedung_id', $gedung_id)->get();
    $kamar = kamar::where('gedung_id', $gedung_id)->get();
    foreach ($kamar as $k) {
      $k->jumlahpenghuni = pembayaran::where('kamar_id', $k->id)->count();
    }
    session::put('halaman_url_user', request()->fullUrl()); // redirect halaman semua kamar 
    return view('/Kamar/semua_kamar', compact('kamar','pengawas'));
  }

  public function detailsemuakamar($id)
  {
    $data = kamar::find($id);
    $penghuni = $data->penghuni;
    return view('/Kamar/info_kamar', compact('data', 'penghuni'));
  }

  public function kamarsaya()
  {
    $userId = auth()->user()->id;
    $data = pembayaran::where('user_id', $userId)->get();
   return view('/Kamarsaya/kamarsaya', compact('data'));
  }
}

