@extends('master')
@section('title', 'Edit Data')
@section('judul_halaman', 'Edit Data Mahasiswa')

@section('konten')
    <a href="/" class="btn btn-danger">Kembali</a>
    <br><br>
    @foreach($mahasiswa as $mhs)
    <form action="/mahasiswa/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $mhs->id }}"><br>
        <div class="form-group">
          <label for="namamhs">Nama</label>
          <input type="text" name="namamhs" class="form-control" value="{{ $mhs->nama }}" required>
        </div>
        <div class="form-group">
          <label for="nimmhs">NIM</label>
          <input type="number" name="nimmhs" class="form-control" value="{{ $mhs->nim }}" required>
        </div>
        <div class="form-group">
          <label for="emailmhs">E-mail</label>
          <input type="text" name="emailmhs" class="form-control" value="{{ $mhs->email }}" required>
        </div>
        <div class="form-group">
          <label for="jurusanmhs">Jurusan</label>
          <input type="text" name="jurusanmhs" class="form-control" value="{{ $mhs->jurusan }}" required>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data</button>
    </form>
    @endforeach
@endsection