@extends('master')
@section('title', 'Validasi Data')
@section('judul_halaman', 'Validasi Data Mahasiswa')
@section('konten')
<h3 class="my-4">Data yang di Input : </h3>
    <table class="table table-bordered table-striped">
        <tr>
            <td style="width:150px">Nama</td>
            <td>{{ $data->namamhs }}</td>
        </tr>
        <tr>
            <td style="width:150px">NIM</td>
            <td>{{ $data->nimmhs }}</td>
        </tr>
        <tr>
            <td style="width:150px">Email</td>
            <td>{{ $data->emailmhs }}</td>
        </tr>
        <tr>
            <td style="width:150px">Jurusan</td>
            <td>{{ $data->jurusanmhse }}</td>
        </tr>
    </table>
    <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
@endsection
