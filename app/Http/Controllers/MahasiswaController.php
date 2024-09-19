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
    public function create()
    {
        return view('tambah-mahasiswa');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|size:10',
            'nama' => 'required|max:50'
        ], [
            'nim.required' => 'kolom ini harus diisi ya',
            'nim.size' => 'kolom nim harus berukuran :size karakter',
            'nama.required' => 'kolom ini harus diisi ya',
            'nama.max' => 'kolom nama maksimal berukuran :max karakter'
        ]);

        $nim = $request->nim;
        $nama = $request->nama;
        $store = Mahasiswa::create(['nim' => $nim, 'nama' => $nama]);
        if ($store) {
            return redirect()->route('list-mahasiswa');
        } else {
            return redirect()->back();
        }
    }
    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        return view('edit-mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function update(Request $request, $nim)
    {
        $update = Mahasiswa::where('nim', $nim)->update(['nama' => $request->nama]);
        $request->validate([
            'nama' => 'required|max:50'
        ], [
            'nama.required' => 'kolom ini harus diisi ya',
            'nama.max' => 'kolom nama maksimal berukuran :max karakter'
        ]);
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        $update = $mahasiswa->update(['nama' => $request->nama]);
        
        if ($update) {
            return redirect()->route('list-mahasiswa');
        } else {
            return redirect()->back();
        }
    }
    public function delete($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim);
        $delete = $mahasiswa->delete();
        if ($delete) {
            return redirect()->route('list-mahasiswa');
        } else {
            return redirect()->back();
        }
    }
}