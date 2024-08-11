<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        // return dd($mahasiswa);

        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
