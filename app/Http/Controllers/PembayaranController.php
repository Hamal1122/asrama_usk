<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\berkas;
use App\Models\users;
use App\Models\gedung;
use App\Models\kamar;
use App\Models\Riwayat;
use App\Mail\TransactionConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Mail\kirimEmail;
use App\Mail\tolakBerkasEmail;
use App\Mail\tolakPembayaranEmail;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;




use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(Request $request)
    {
        $query = berkas::query();

        if ($request->has('search')) {
            $query->whereHas('user', function ($query) use ($request) {
                $query->where('nim', 'LIKE', '%' . $request->search . '%');
            });
        }

        if ($request->has('kategori') && !empty($request->kategori)) {
            $query->where('kategori', $request->kategori);
        }

        $data = $query->orderBy('id', 'desc')->get();

        $paginate = $query->paginate(10);
        $categories = Berkas::select('kategori')->distinct()->pluck('kategori');

        return view('berkas/manage_berkas', compact('data', 'categories', 'paginate'))->with('i', ($request->input('page', 1) - 1));
    }


    public function reject($id)
    {
        $data = berkas::find($id);
        $data->delete($id);
        Mail::to($data->user->email)->send(new tolakBerkasEmail($data));
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

      $paginate = $query->paginate(10);

      $categories = Berkas::select('kategori')->distinct()->pluck('kategori');

      return view('berkas/manage_pembayaran', compact('data', 'categories', 'paginate'))->with('i', ($request->input('page', 1) - 1));
  }

    public function reject_pembayaran($id)
    {
        $data = pembayaran::find($id);
        $data->delete($id);
        Mail::to($data->user->email)->send(new tolakPembayaranEmail($data));
        return redirect()->route('manage_pembayaran');
    }

    public function accept(Request $request, $id)
{
    $data = pembayaran::find($id);
    $data->update($request->all());

    $idUser = $request->id;
    $kategori = $request->kategori;

    // Generate automatic receipt number with 6 characters
    $nomorResi = 'TR' . str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);

    $riwayat = new Riwayat();
    $riwayat->user_id = $idUser;
    $riwayat->kamar_id = $request->kamar_id;
    $riwayat->tanggal_masuk = $request->tanggal_masuk;
    $riwayat->tanggal_keluar = $request->tanggal_keluar;
    $riwayat->kategori = $kategori;
    $riwayat->harga = '1200000';
    $riwayat->jeniskamar = '4Orang';
    $riwayat->durasi = '1tahun';
    $riwayat->status = '0'; // 0 = masih tinggal, 1 = sudah selesai
    $riwayat->nomor_resi = $nomorResi; // Assign the generated receipt number
    $riwayat->save();

    Mail::to($data->user->email)->send(new kirimEmail($data));

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
