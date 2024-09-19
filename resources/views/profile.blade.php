@extends('layouts')
@section('title')
Data Profile
@endsection
@section('heading')
Data Profile
@endsection
@section('content')
<div class="card-body">
    <div class="table-responsive">
        @if ($errors->any('error'))
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('profile.change-avatar') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $profile->id }}">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $profile->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" value="{{ $profile->email }}" readonly>
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">Foto Profil</label>
                @if ($profile->avatar != null)
                    <input type="file" name="avatar" class="form-control" id="avatar">
                    <img src="{{ asset('storage/uploads/' . $profile->avatar) }}" alt="" style="display: block; margin-top: 12px;">
                @else
                    <input type="file" name="avatar" class="form-control" id="avatar">                 
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection