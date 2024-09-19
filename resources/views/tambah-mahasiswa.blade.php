@extends('layouts')
@section('title')
Tambah Data Mahasiswa
@endsection
@section('heading')
Tambah Data Mahasiswa
@endsection
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <form method="POST" action="{{ route('simpan-mahasiswa') }}">
            @csrf
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim">
                @error('nim')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('list-mahasiswa') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
@endsection