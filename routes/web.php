<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/login', [LoginController::class, 'showFormLogin']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware(Authenticate::class);
Route::post('/profile/change-avatar', [ProfileController::class, 'change_avatar'])->name('profile.change-avatar')->middleware(Authenticate::class);
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('list-mahasiswa')->middleware(Authenticate::class);
Route::get('/tambah-mahasiswa', [MahasiswaController::class, 'create'])->name('tambah-mahasiswa')->middleware(Authenticate::class);
Route::post('/simpan-mahasiswa', [MahasiswaController::class, 'store'])->name('simpan-mahasiswa')->middleware(Authenticate::class);
Route::get('/edit-mahasiswa/{nim}', [MahasiswaController::class, 'edit'])->name('edit-mahasiswa')->middleware(Authenticate::class);
Route::put('/update-mahasiswa/{nim}', [MahasiswaController::class, 'update'])->name('update-mahasiswa')->middleware(Authenticate::class);
Route::delete('/hapus-mahasiswa/{nim}', [MahasiswaController::class, 'delete'])->name(('hapus-mahasiswa'))->middleware(Authenticate::class);