@extends('master')
@section('title', 'Tambah Data')
@section('judul_halaman', 'Tambah Data Mahasiswa')
@section('konten')
    <a href="/mahasiswa" class="btn btn-danger">Kembali</a>
    <br><br>
    <form action="/laravel-crud-kedua/public/mahasiswa/simpan" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="namamhs">Nama</label>
          <input type="text" name="namamhs" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="nimmhs">NIM</label>
          <input type="number" name="nimmhs" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="emailmhs">E-mail</label>
          <input type="text" name="emailmhs" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="jurusanmhs">Jurusan</label>
          <input type="text" name="jurusanmhs" class="form-control" required>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
    </form>
@endsection
