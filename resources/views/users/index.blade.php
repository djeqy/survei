@extends('layout.main')

@section('title', 'Users Form')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
        <h1 class="mt-3">Daftar User</h1>
    <a href="/users/create" class="btn btn-primary">ADD NEW DATA</a>
    
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
        <ul class="list-group">
    @foreach ( $users as $user )
    <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $user->nama }}
    <a href="/users/{{ $user->id }}" class="btn btn-primary">DETAIL</a>
    </li>
    @endforeach
        </ul>
            </div>
        </div>
    </div>
@endsection 
