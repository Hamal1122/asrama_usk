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
      $query = Pembayaran::query();

      if ($request->has('search')) {
          $query->whereHas('user', function ($query) use ($request) {
              $query->where('nim', 'LIKE', '%' . $request->search . '%');
          });
      }

      if ($request->has('kategori') && !empty($request->kategori)) {
          $query->whereHas('berkas', function ($query) use ($request) {
              $query->where('kategori', $request->kategori);
          });
      }

      $data = $query->orderBy('id', 'desc')->get();

      if ($data->isEmpty() && $request->has('search')) {
          return view('berkas/eror');
      }

      $categories = Berkas::select('kategori')->distinct()->pluck('kategori');
      $paginate = $query->paginate(10);

      return view('manage_keuangan/manage_keuangan', compact('data', 'categories','paginate'))->with('i', ($request->input('page', 1) - 1));
  }
}
