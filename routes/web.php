<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', [ProfileController::class, 'index']);

Route::resource('/profiles', \App\Http\Controllers\ProfileController::class);
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('list-mahasiswa');
Route::get('/tambah-mahasiswa', [MahasiswaController::class, 'create'])->name('tambah-mahasiswa');
Route::post('/simpan-mahasiswa', [MahasiswaController::class, 'store'])->name('simpan-mahasiswa'); 
Route::post('/simpan-mahasiswa', [MahasiswaController::class, 'store'])->name('simpan-mahasiswa');
Route::get('/edit-mahasiswa/{nim}', [MahasiswaController::class, 'edit'])->name('edit-mahasiswa');
Route::put('/update-mahasiswa/{nim}', [MahasiswaController::class, 'update'])->name('update-mahasiswa');
Route::delete('/hapus-mahasiswa/{nim}', [MahasiswaController::class, 'delete'])->name(('hapus-mahasiswa'));