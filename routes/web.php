<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KamarsayaController;
use App\Models\Beranda;



// User


// login
Route::get('/',[LoginController::class, 'index'])->name('Login');
Route::post('/login',[LoginController::class, 'login']);
// login

// Beranda
Route::get('/beranda',[BerandaController::class, 'beranda'])->name('beranda');
Route::get('post/{id}',[BerandaController::class, 'detail'])->name('postingan');
// Beranda

// kamar
Route::get('/kamar',[KamarController::class, 'kamar'])->name('kamar');
Route::get('/gender',[KamarController::class, 'gender'])->name('gender');
// kamar

Route::get('/kamarsaya',[KamarsayaController::class, 'kamarsaya'])->name('kamarsaya');

// profile
Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');
Route::get('/edit_profile',[ProfileController::class, 'edit'])->name('edit_profile');


// Upload Berkas
Route::get('/berkas',[BerkasController::class, 'berkas'])->name('berkas');
// Upload Berkas





// Admin

// Dashboard
Route::get('/beranda_admin',[BerandaController::class, 'admin'])->name('beranda_admin');


// Manage Kamar
Route::get('/manage_kamar',[KamarController::class, 'manage'])->name('manage_kamar');

// Manage Informasi
Route::get('/manage_informasi',[BerandaController::class, 'informasi'])->name('manage_informasi');
Route::get('/tambah_informasi',[BerandaController::class, 'tambahInformasi'])->name('tambahInformasi'); 
Route::post('/tambah_informasi',[BerandaController::class, 'tambah'])->name('tambah'); // tambah data
Route::get('/tampil_informasi/{id}',[BerandaController::class, 'show'])->name('show'); // menampilkan data yang ingin diedit
Route::post('/edit_informasi/{id}',[BerandaController::class, 'edit'])->name('edit'); // update data /edit
Route::get('/delete_informasi/{id}',[BerandaController::class, 'delete'])->name('delete'); // delete data



// Manage Berkas
Route::get('/manage_berkas',[BerkasController::class, 'manage'])->name('manage_berkas');