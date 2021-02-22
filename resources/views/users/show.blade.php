@extends('layout.main')

@section('title', 'Detail User Form')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
        <h1 class="mt-3">Detail User</h1>

        <div class="card">
    <div class="card-body">
    <h5 class="card-title">{{ $user->nama }}</h5>
    <p class="card-text">{{ $user->alamat }}</p>
    <p class="card-text">{{ $user->tahun_masuk}}</p>
    <p class="card-text">{{ $user->divisi->nama}}</p>
    <a href="{{ $user->id }}/edit" class="btn btn-primary">EDIT</a>
    <form action="{{ $user->id }}" method="post" class="d-inline">
        @method('delete')
        @csrf
    <button type="delete" class="btn btn-danger">DELETE</button>
    <a href="/users" class="btn btn-primary">BACK</a>
    </form>
    </div>
    </div>
        
            </div>
        </div>
    </div>
@endsection 