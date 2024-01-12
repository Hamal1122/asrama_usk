<?php

namespace App\Http\Controllers;

use App\Models\berkas;
use App\Models\Pembayaran;
use App\Models\Riwayat;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Auth;

class BerkasController extends Controller
{
  public function berkas()
  {
    $userId = auth()->user()->id;
    $uploaded = berkas::where('user_id', $userId)->first();
    $pembayaran = Pembayaran::where('user_id', $userId)->first();
    $data = berkas::all();
    
    // if (($uploaded && $uploaded->status == 0) && !$pembayaran) {
    //   return view('berkas/berhasil');//berhasil upload berkas
    // }
    // if (($uploaded && $uploaded->status == 1) && !$pembayaran) {
    //   return view('berkas/bukti_pembayaran');//melakukan pembayaran
    // } elseif($pembayaran && $pembayaran->status == 0){
    //   return view('berkas/tunggubayar');//tunggu verifikasi kamar dan bayar
    // }
    // elseif ($pembayaran->status == 1 && $pembayaran->kamar_id != 0) {
    //   return view('/berkas/berhasilBayar');
    // } else {
    //   return view('berkas/berkas');
    // }
    if (!$uploaded) {
      return view('/berkas/berkas', compact('data'));
    } elseif ($uploaded->status == 0) {
      return view('/berkas/berhasil', compact('data'));
    } elseif ($uploaded->status == 1 && !$pembayaran) {
      return view('/berkas/bukti_pembayaran', compact('data'));
    } elseif ($uploaded->status == 1 && $pembayaran->status == 0) {
      return view('/berkas/tunggubayar', compact('data'));
    } elseif ($uploaded->status == 1 && $pembayaran->status == 1 && $pembayaran->kamar_id == 0) {
      return view('/berkas/berhasilBayar', compact('data', 'pembayaran'));
    } else {
      return view('/berkas/berhasilBayar', compact('data', 'pembayaran') );
    }
  }
  public function tambah(Request $request)
  {

    berkas::create($request->all());
    return redirect()->route('kamarsaya')->with('berhasil', 'Data Telah Berhasil Ditambahkan');
  }

  public function upload(Request $request)
  {
    $request->validate(
      [
        'nama_berkas' => 'required|mimes:pdf|max:10000'
      ],
      [
        'file.required' => 'File tidak boleh kosong',
        'file.mimes' => 'File harus berupa pdf',
        'file.max' => 'File maksimal 10MB'
      ]
    );


    $file = $request->file('nama_berkas');
    $nama_file = date("d-m-y") . "_" . $request->user()->nim . "." . $file->extension();

    //simpan file ke storage
    $file->storeAs('uploads', $nama_file, 'public');

    //simpan ke database
    $berkas = new berkas();
    $berkas->user_id = auth()->user()->id;
    $berkas->status = 0;
    $berkas->kategori = $request->kategori;
    $berkas->nama_berkas = $nama_file;
    $berkas->kategorigedung = $request->kategorigedung;
    $berkas->jeniskamar = $request->jenisKamar;
    $berkas->harga = $request->harga;
    $berkas->durasi = $request->durasi;
    $berkas->save();



    return back()->with('berhasil', 'Berkas Anda berhasil di upload');
  }

  public function upload_bukti_bayar(Request $request)
  {
    $request->validate(
      [
        'bukti_bayar' => 'required|mimes:pdf,png,jpg,jpeg|max:10000'
      ],
      [
        'file.required' => 'File tidak boleh kosong',
        'file.mimes' => 'File tidak sesuai format',
        'file.max' => 'File maksimal 10MB'
      ]
    );
    $bukti = $request->file('bukti_bayar');
    $buktiName = date("d-m-y") . "_buktiPembayaran_" . $request->user()->nim . "." . $bukti->extension();
    $bukti->storeAs('bukti', $buktiName, 'public');

    $pembayaran = new Pembayaran();
    $pembayaran->user_id = auth()->user()->id;
    $pembayaran->kamar_id = 0;
    // $pembayaran->masa_tinggal = "1tahun";
    // $pembayaran->user_id = auth()->berkas()->durasi;
    $pembayaran->tanggal_masuk = date("Y-m-d");
    $pembayaran->tanggal_keluar = date("Y-m-d");
    $pembayaran->bukti_pembayaran = $buktiName;
    $pembayaran->status = '0';
    $pembayaran->save();

    return back()->with('berhasil', 'Bukti Pembayaran Anda berhasil di upload');
  }
}


