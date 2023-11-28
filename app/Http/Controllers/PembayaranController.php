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


    public function reject($id)
    {
        $data = berkas::find($id);
        $data->delete($id);
        return redirect()->route('manage_berkas');
    }

    public function confirm($id)
    {
        try{
            $data = berkas::findorFail($id);
            $data->status = 1;
            $data->save();

            \Log::info('status berkas berhasil diubah');
            return redirect()->route('manage_berkas');
        }catch(\Exception $e){
            \Log::error('status berkas gagal diubah');
            return redirect()->route('manage_berkas');
        }
    }
    
    function detail_berkas()
    {
        $pembayaran = Pembayaran::all();
        $berkas = berkas::all();
        return view('/berkas/detail_manage_berkas', compact('pembayaran', 'berkas'));
    }

    public function bukti()
    {
        $pembayaran = Pembayaran::all();
        $berkas = berkas::all();
        return view('/berkas/bukti_pembayaran', compact('pembayaran', 'berkas'));
    }

    public function manage_pembayaran()
    {
        return view('/berkas/manage_pembayaran');
    }
}
