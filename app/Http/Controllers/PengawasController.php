<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use App\Models\gedung;
use App\Models\pengawas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PengawasController extends Controller
{

    public function index()
    {
      $data = pengawas::orderBy('id', 'desc')->get();
      return view('/pengawas/manage_pengawas', compact('data'));
    }

    public function tambah(Request $request)
  {
    pengawas::create($request->all());
    return redirect()->route('manage_pengawas')->with('berhasil', 'Pengawas Telah Berhasil Ditambahkan');
  }

  public function formtambah()
  {
    $ged = gedung::all();
    return view('/pengawas/tambah_pengawas', compact('ged'));
  }

  public function edit(Request $request, $id)
  {
    $data = pengawas::find($id);
    $data->update($request->all());
    return redirect()->route('manage_pengawas')->with('berhasil', 'Pengawas Telah Berhasil Update');
  }

  public function formedit($id)
  {
    $ged = gedung::all();
    $data = pengawas::find($id);
    return view('/pengawas/edit_pengawas', compact('ged','data'));
  }

  public function delete($id)
  {
    $data = pengawas::find($id);
    $data->delete($id);
    return redirect()->route('manage_pengawas')->with('berhasil', 'Pengawas Telah Berhasil dihapus');
  }

}
