<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('list-mahasiswa');
Route::get('/tambah-mahasiswa', [MahasiswaController::class, 'create'])->name('tambah-mahasiswa');
Route::post('/simpan-mahasiswa', [MahasiswaController::class, 'store'])->name('simpan-mahasiswa');