@extends('layout.main')

@section('title', 'Edit Data User Form')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
        <h1 class="mt-3">Edit User Data</h1>
        <form method="post" action="/users/{{ $user->id }}">
            @method('patch')
            @csrf
            <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{$user->nama}}">
            @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>

            <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control  @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{$user->alamat}}">
            @error('alamat')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>

            <div class="mb-3">
            <label for="tahun_masuk" class="form-label">Tahun-Join</label>
            <input type="text" class="form-control  @error('tahun_masuk') is-invalid @enderror" id="tahun_masuk" placeholder="Masukan Tahun" name="tahun_masuk" value="{{$user->tahun_masuk}}">
            @error('tahun_masuk')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>

            <div class="mb-3">
            <label class="form-label">Divisi</label>
            <select name="divisi_id" class="form-control  @error('divisi_id') is-invalid @enderror">
                <option value="">-Pilih Divisi-</option>
                @foreach ($divisi as $div)
                <option value="{{$div->id}}" {{('divisi_id') == $div->id ? 'selected' : null}}>{{$div->nama}}</option>
                @endforeach     
            </select>
            @error('divisi_id')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
            <button type="submit" class="btn btn-primary" >CONFIRM</button>
            <a href="/users" class="btn btn-primary">CANCEL</a>
        </form>
            </div>
        </div>
    </div>
@endsection 
