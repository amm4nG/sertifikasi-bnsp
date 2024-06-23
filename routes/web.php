<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

// routing url default
Route::get('/', function(){
    return view('welcome'); // tampilkan halaman welcome
});

// routing halaman login
Route::get('/login', [LoginController::class, 'index'])
->name('login') // name route
->middleware('guest'); // hanya bisa diakses untuk user yang belum login

// routing validasi login user
Route::post('/validasi', [LoginController::class, 'validasi'])->name('validasi');
// routing logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// routing halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')
->middleware('auth'); // hanya bisa diakses oleh user yang sudah login

// routing halaman crud pegawai
Route::resource('pegawai', PegawaiController::class)
->middleware('auth') // hanya bisa diakses untuk user yang telah login
->parameter('pegawai', 'id'); // dapatkan id untuk validasi request