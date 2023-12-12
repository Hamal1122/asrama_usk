<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\berkas;
use App\Models\users;
use App\Models\gedung;
use App\Models\kamar;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    function index(Request $request)
    {
        if($request->has('search')){
            $berkas = Berkas::whereHas('user', function ($query) use ($request) {
                $query->where('nim', 'LIKE', '%' . $request->search . '%');
            })->get();

            if ($berkas->isEmpty()) 
            {
                return view ('/berkas/eror');
            }

        }else{
        $berkas = berkas::orderBy('id', 'desc')->get();
        }
        return view('/berkas/manage_berkas', compact('berkas'))->with('i', ($request->input('page', 1) - 1));
    
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

    public function confirm_pembayaran($id)
    {

        try{
            $pembayaran = pembayaran::findorFail($id);
            $pembayaran->status = 1;
            $pembayaran->save();

            \Log::info('status berkas berhasil diubah');
            return redirect()->route('manage_pembayaran');
        }catch(\Exception $e){
            \Log::error('status berkas gagal diubah');
            return redirect()->route('manage_pembayaran');
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

    public function manage_pembayaran(Request $request)
    {
        $data = Pembayaran::all();
        $berkas = berkas::all();
        return view('/berkas/manage_pembayaran', compact('data', 'berkas'))->with('i', ($request->input('page', 1) - 1));
    }

    public function reject_pembayaran($id)
    {
        $data = pembayaran::find($id);
        $data->delete($id);
        return redirect()->route('manage_pembayaran');
    }

    public function accept(Request $request, $id)
  {
    $data = pembayaran::find($id);
    $data->update($request->all());
    return redirect()->route('manage_pembayaran')->with('berhasil', 'Data berhasil ditambahkan');
  }

  public function form($id)
  {
    $pembayaran = pembayaran::find($id);
    $gedung = gedung::all();
    $kamar = kamar::all();
    foreach ($kamar as $k) {
        $k->jumlahpenghuni = pembayaran::where('kamar_id', $k->id)->count();
      }
    
    return view('/berkas/terima_pembayaran', compact('pembayaran','gedung','kamar'));
  }

}
