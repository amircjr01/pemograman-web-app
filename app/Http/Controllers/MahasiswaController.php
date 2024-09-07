<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Mahasiswa::create([
            'nim' => $request->nim, // Added this line to handle id_barang
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        session()->flash('success', 'Data Mahasiswa baru berhasil ditambahkan!');

        return redirect('/');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update([
            'nim' => $request->nim, // Added this line to handle id_barang
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        session()->flash('success', 'Data Mahasiswa berhasil diubah!');

        return redirect('/');
    }

    public function delete(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        session()->flash('success', 'Data Mahasiswa berhasil dihapus!');

        return redirect('/');
    }
}