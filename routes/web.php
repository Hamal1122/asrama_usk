<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KamarsayaController;
use App\Http\Controllers\PengawasController;
use App\Models\kamar;
use Illuminate\Support\Facades\Request;



// Manage Berkas
// Route::get('/manage_berkas',[BerkasController::class, 'manage'])->name('manage_berkas');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::middleware(['auth', 'user-role:admin'])->group(function () {

    Route::get('/manage_informasi', [BerandaController::class, 'informasi'])->name('manage_informasi');// manage informasi(postingan)
    Route::get('/tambah_informasi', [BerandaController::class, 'tambahInformasi'])->name('tambahInformasi'); // menambah postingan
    Route::post('/tambah_informasi', [BerandaController::class, 'tambah'])->name('tambah'); // tambah data
    Route::get('/tampil_informasi/{id}', [BerandaController::class, 'show'])->name('show'); // menampilkan data yang ingin diedit
    Route::post('/edit_informasi/{id}', [BerandaController::class, 'edit'])->name('edit'); // update data /edit
    Route::get('/delete_informasi/{id}', [BerandaController::class, 'delete'])->name('delete'); // delete data

    // manage berkas
    Route::get('/manage_berkas', [PembayaranController::class, 'index'])->name('manage_berkas'); // tampilan manage berkas
    Route::post('/manage_berkas/accept/{id}', [PembayaranController::class, 'confirm'])->name('confirm.data'); // konfirmasi berkas
    Route::get('/detail_berkas', [PembayaranController::class, 'detail_berkas'])->name('detail_berkas'); // detail berkas user berdasarkan id
    Route::get('/reject/{id}', [PembayaranController::class, 'reject'])->name('reject'); // delete data gedung
    Route::get('/manage_pembayaran', [PembayaranController::class, 'manage_pembayaran'])->name('manage_pembayaran'); // menampilkan halaman manage pembayaran

    // manage gedung 
    Route::get('/manage_kamar', [KamarController::class, 'manage'])->name('manage_kamar'); // halaman manage kamar
    Route::post('/tambah_gedung', [KamarController::class, 'tambah'])->name('tambah gedung'); // menambahkan gedung
    Route::get('/tambah_gedung', [KamarController::class, 'tampil'])->name('tambah gedung'); // halaman form tambah gedung
    Route::get('/tampil_gedung/{id}', [KamarController::class, 'tampilgedung'])->name('tampilgedung'); // menampilkan data gendung
    Route::post('/edit_gedung/{id}', [KamarController::class, 'editgedung'])->name('tampilgedung'); // update data gedung
    Route::get('/update_gedung/{id}', [KamarController::class, 'updategedung'])->name('updatekamar'); // menampilkan form edit gedung
    Route::get('/delete_gedung/{id}', [KamarController::class, 'deletegedung'])->name('deletegedung'); // delete data gedung

    // manage kamar
    Route::get('/gedung/{id}', [KamarController::class, 'isigedung'])->name('isigedung'); // menampilkan kamar kamar di dalam gedung berdasarkan id gedung
    Route::get('detail_kamar/{id}', [KamarController::class, 'detailkamar'])->name('detailkamar'); // menampilkan detail kamar
    Route::post('/tambah_kamar', [KamarController::class, 'tambahkamar'])->name('tambah kamar'); // menambahkan data kamar
    Route::get('/tambah_kamar', [KamarController::class, 'formtambahkamar'])->name('tambah kamar'); // menampilkan form tambah kamar
    Route::get('/update_kamar/{id}', [KamarController::class, 'updatekamar'])->name('updatekamar'); // tampilkan form edit kamar
    Route::post('/edit_kamar/{id}', [KamarController::class, 'editkamar'])->name('editkamar'); // proses edit kamar
    Route::get('/delete_kamar/{id}', [KamarController::class, 'deletekamar'])->name('deletekamar'); // delete data kamar

    //manage pengawas
    Route::get('/manage_pengawas', [PengawasController::class, 'index'])->name('manage_pengawas'); // halaman manage kamar
    Route::post('/tambah_pengawas', [PengawasController::class, 'tambah'])->name('tambah_pengawas');
    Route::get('/tambah_pengawas', [PengawasController::class, 'formtambah'])->name('tambah_pengawas');
    Route::post('/edit_pengawas/{id}', [PengawasController::class, 'edit'])->name('edit_pengawas');
    Route::get('/update_pengawas/{id}', [PengawasController::class, 'formedit'])->name('edit_pengawas');
    Route::get('/delete_pengawas/{id}', [PengawasController::class, 'delete'])->name('deletekamar'); // delete data kamar
    

    // Dashboard Admin
    Route::get('/beranda_admin', [BerandaController::class, 'admin'])->name('beranda_admin'); // menampilkan beranda admin
});

//mahasiswa (User)
Route::middleware(['auth', 'user-role:mahasiswa'])->group(function () {
    // Beranda
    Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');// menampilkan halaman beranda admin
    Route::get('post/{id}', [BerandaController::class, 'detail'])->name('postingan');// menampilkan halaman detail postingan

    // kamar
    Route::get('/kamarsaya', [KamarsayaController::class, 'kamarsaya'])->name('kamarsaya'); // menampilkan halaman Kamar saya
    Route::get('/semua_gedung', [KamarController::class, 'semuagedung'])->name('semuagedung'); // menampilkan halaman semua gedung di menu semua kamar
    Route::get('/semuakamar/{id}', [KamarController::class, 'semuakamar'])->name('semuakamar'); // menampilkan kamar kamar di dalam gedung berdasarkan id gedung
    Route::get('/info_kamar/{id}', [KamarController::class, 'detailsemuakamar'])->name('detailsemuakamar'); // menampilkan halaman semua kamar di menu semua kamar

    // profile
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile'); // menampilkan halaman profile pengguna

    // Upload Berkas
    Route::get('/upload_berkas', [BerkasController::class, 'berkas'])->name('berkas'); // menampilkan halaman untuk mengupload berkas
    Route::post('/upload_berkas/upload', [BerkasController::class, 'upload'])->name('berkas.upload'); // proses upload berkas
    Route::get('/bukti_pembayaran', [PembayaranController::class, 'bukti'])->name('bukti_pembayaran'); // menampilkan halaman upload bukti pembayaran
    Route::post('/bukti_pembayaran/upload', [BerkasController::class, 'upload_bukti_bayar'])->name('upload.bukti_pembayaran'); // proses upload bukti pembayaran
    
});



// function menu aktif sidebar
function set_active($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'menuaktif' : '';
    }
    return Request::path() == $route ? 'menuaktif' : '';
}
