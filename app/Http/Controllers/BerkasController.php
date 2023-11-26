<?php

namespace App\Http\Controllers;

use App\Models\berkas;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Auth;

class BerkasController extends Controller
{
  public function berkas(){
    $data = berkas::all();
    return view('/berkas/berkas', compact('data')); 
  } 

  public function tambah(Request $request)
  {
      berkas::create($request->all());
      return redirect()->route('kamarsaya')->with('berhasil','Data Telah Berhasil Ditambahkan');
  }

  public function upload(Request $request)
  {
      $request->validate([
          'nama_berkas' => 'required|mimes:pdf|max:10000'
      ], 
    [
      'file.required' => 'File tidak boleh kosong',
      'file.mimes' => 'File harus berupa pdf',
      'file.max' => 'File maksimal 10MB'
    ]
    );

      $file = $request->file('nama_berkas');
      $nama_file = time(). $request->user()->nim . "." . $file->extension();
      
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

      return back()->with('success', 'File berhasil di upload');
  }
}


