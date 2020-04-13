@extends('master')
@section('title', 'Edit Data')
@section('judul_halaman', 'Edit Data Mahasiswa')

@section('konten')
    <a href="/mahasiswa" class="btn btn-danger">Kembali</a>
    <br><br>
    <form action="/laravel-crud-kedua/public/mahasiswa/update/{{ $mahasiswa->id }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $mahasiswa->id }}"><br>
        <div class="form-group">
          <label for="namamhs">Nama</label>
          <input type="text" name="namamhs" class="form-control" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="form-group">
          <label for="nimmhs">NIM</label>
          <input type="number" name="nimmhs" class="form-control" value="{{ $mahasiswa->nim }}" required>
        </div>
        <div class="form-group">
          <label for="emailmhs">E-mail</label>
          <input type="text" name="emailmhs" class="form-control" value="{{ $mahasiswa->email }}" required>
        </div>
        <div class="form-group">
          <label for="jurusanmhs">Jurusan</label>
          <input type="text" name="jurusanmhs" class="form-control" value="{{ $mahasiswa->jurusan }}" required>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data</button>
    </form>
@endsection
