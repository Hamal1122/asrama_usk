<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\berkas;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    function index(Request $request)
    {
        $pembayaran = Pembayaran::all();
        $berkas = berkas::orderBy('id', 'desc')->get();
        return view('/berkas/manage_berkas', compact('pembayaran', 'berkas'))->with('i', ($request->input('page', 1) - 1));
        // return redirect('berkas/berkas')->route('manage_pembayaran')->with('berhasil', 'Data Pembayaran Telah Berhasil Ditambahkan');
    }

    function detail_berkas()
    {
        $pembayaran = Pembayaran::all();
        $berkas = berkas::all();
        return view('/berkas/detail_manage_berkas', compact('pembayaran', 'berkas'));
    }
}
