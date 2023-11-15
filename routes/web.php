<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KamarsayaController;




// User


// // login
// Route::get('/',[LoginController::class, 'index'])->name('Login');
// Route::get('/loginproses',[LoginController::class, 'index'])->name('loginproses');
  


// Beranda
// Route::get('/',[BerandaController::class, 'beranda'])->middleware('auth')->name('beranda');
// Route::get('post/{id}',[BerandaController::class, 'detail'])->name('postingan');
// // Beranda

// // kamar
// Route::get('/gender',[KamarController::class, 'gender'])->name('gender');
// // kamar

// Route::get('/kamarsaya',[KamarsayaController::class, 'kamarsaya'])->name('kamarsaya');

// // profile
// Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');
// Route::get('/edit_profile',[ProfileController::class, 'edit'])->name('edit_profile');


// // Upload Berkas
// Route::get('/upload_berkas',[BerkasController::class, 'berkas'])->name('berkas');
// Route::post('/upload_berkas',[BerkasController::class, 'tambah'])->name('upload berkas');
// Upload Berkas





// Admin

// Dashboard
// Route::get('/beranda_admin',[BerandaController::class, 'admin'])->middleware('auth')->name('beranda_admin');


// Manage Gedung
// Route::get('/manage_kamar',[KamarController::class, 'manage'])->name('manage_kamar');// halaman manage kamar
// Route::post('/tambah_gedung',[KamarController::class, 'tambah'])->name('tambah gedung');// menambahkan gedung
// Route::get('/tambah_gedung',[KamarController::class, 'tampil'])->name('tambah gedung');// halaman form tambah gedung
// Route::get('/tampil_gedung/{id}',[KamarController::class, 'tampilgedung'])->name('tampilgedung');// menampilkan data gendung
// Route::post('/edit_gedung/{id}',[KamarController::class, 'editgedung'])->name('tampilgedung');// update data gedung
// Route::get('/delete_gedung/{id}',[KamarController::class, 'deletegedung'])->name('deletegedung'); // delete data gedung

// manage Kamar
Route::get('kamar/{id}',[KamarController::class, 'kamar'])->name('kamar');


// Manage Informasi
// Route::get('/manage_informasi',[BerandaController::class, 'informasi'])->name('manage_informasi');
// Route::get('/tambah_informasi',[BerandaController::class, 'tambahInformasi'])->name('tambahInformasi'); 
// Route::post('/tambah_informasi',[BerandaController::class, 'tambah'])->name('tambah'); // tambah data
// Route::get('/tampil_informasi/{id}',[BerandaController::class, 'show'])->name('show'); // menampilkan data yang ingin diedit
// Route::post('/edit_informasi/{id}',[BerandaController::class, 'edit'])->name('edit'); // update data /edit
// Route::get('/delete_informasi/{id}',[BerandaController::class, 'delete'])->name('delete'); // delete data



// Manage Berkas
// Route::get('/manage_berkas',[BerkasController::class, 'manage'])->name('manage_berkas');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::middleware(['auth', 'user-role:admin'])->group(function (){
    Route::get('/manage_informasi',[BerandaController::class, 'informasi'])->name('manage_informasi');
    Route::get('/tambah_informasi',[BerandaController::class, 'tambahInformasi'])->name('tambahInformasi'); 
    Route::post('/tambah_informasi',[BerandaController::class, 'tambah'])->name('tambah'); // tambah data
    Route::get('/tampil_informasi/{id}',[BerandaController::class, 'show'])->name('show'); // menampilkan data yang ingin diedit
    Route::post('/edit_informasi/{id}',[BerandaController::class, 'edit'])->name('edit'); // update data /edit
    Route::get('/delete_informasi/{id}',[BerandaController::class, 'delete'])->name('delete'); // delete data
    Route::get('/manage_berkas',[BerkasController::class, 'manage'])->name('manage_berkas');
    Route::get('/manage_kamar',[KamarController::class, 'manage'])->name('manage_kamar');// halaman manage kamar
    Route::post('/tambah_gedung',[KamarController::class, 'tambah'])->name('tambah gedung');// menambahkan gedung
    Route::get('/tambah_gedung',[KamarController::class, 'tampil'])->name('tambah gedung');// halaman form tambah gedung
    Route::get('/tampil_gedung/{id}',[KamarController::class, 'tampilgedung'])->name('tampilgedung');// menampilkan data gendung
    Route::post('/edit_gedung/{id}',[KamarController::class, 'editgedung'])->name('tampilgedung');// update data gedung
    Route::get('/delete_gedung/{id}',[KamarController::class, 'deletegedung'])->name('deletegedung'); // delete data gedung
    Route::get('/beranda_admin',[BerandaController::class, 'admin'])->name('beranda_admin');
});

//mahasiswa
Route::middleware(['auth', 'user-role:mahasiswa'])->group(function(){
    Route::get('/',[BerandaController::class, 'beranda'])->name('beranda');
    Route::get('post/{id}',[BerandaController::class, 'detail'])->name('postingan');
    // Beranda
    
    // kamar
    Route::get('/gender',[KamarController::class, 'gender'])->name('gender');
    // kamar
    
    Route::get('/kamarsaya',[KamarsayaController::class, 'kamarsaya'])->name('kamarsaya');
    
    // profile
    Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');
    Route::get('/edit_profile',[ProfileController::class, 'edit'])->name('edit_profile');
    
    
    // Upload Berkas
    Route::get('/upload_berkas',[BerkasController::class, 'berkas'])->name('berkas');
    Route::post('/upload_berkas',[BerkasController::class, 'tambah'])->name('upload berkas');
});
