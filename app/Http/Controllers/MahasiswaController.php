<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function create()
    {
        return view('tambah-mahasiswa');
    }

    public function store(Request $request)
    {
        $nim = $request->nim;
        $nama = $request->nama;

        $store = Mahasiswa::create(['nim' => $nim, 'nama' => $nama]);

        if ($store) {
            return redirect()->route('list-mahasiswa');
        } else {
            return redirect()->back();
        }
    }
}