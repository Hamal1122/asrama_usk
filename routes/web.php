<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KamarsayaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenderController;

//Route
Route::get('/login',[LoginController::class, 'index'])->name('Login');

Route::get('/beranda',[BerandaController::class, 'beranda'])->name('beranda');

Route::get('/kamar',[KamarController::class, 'kamar'])->name('kamar');

Route::get('/kamarsaya',[KamarsayaController::class, 'kamarsaya'])->name('kamarsaya');

Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');

Route::get('/gender',[GenderController::class, 'gender'])->name('gender');
