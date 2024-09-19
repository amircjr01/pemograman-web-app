@extends('layouts')
@section('title')
Data Mahasiswa
@endsection
@section('heading')
Data Mahasiswa
@endsection
@section('content')
<div class="card-header py-3">
    <a href="{{ route('tambah-mahasiswa') }}" class="btn btn-primary">Tambah Data</a>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            <a href="{{ route('edit-mahasiswa', ['nim' => $item->nim]) }}" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger" onclick="document.getElementById('delete-form').submit();">Hapus</a>
                            <form id="delete-form" action="{{ route('hapus-mahasiswa', ['nim' => $item->nim]) }}" method="post">
                                @csrf
                                @method("DELETE")
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection