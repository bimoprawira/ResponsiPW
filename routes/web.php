<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Pegawai Routes
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{pegawai}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/pegawai/update/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);

// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.post');
