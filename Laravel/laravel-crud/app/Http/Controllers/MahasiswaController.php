<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('index',['mahasiswa' => $mahasiswa]);
    }

    public function tambah(){
        return view('tambah');
    }

    public function simpan(Request $request){
        DB::table('mahasiswa')->insert([
            'nama' => $request->namamhs,
            'nim' => $request->nimmhs,
            'email' => $request->emailmhs,
            'jurusan' => $request->jurusanmhs
        ]);
        return redirect('/');
    }

    public function detail($id){
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
        return view('detail', ['mahasiswa' => $mahasiswa]);
    }

    public function edit($id){
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request){
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nama' => $request->namamhs,
            'nim' => $request->nimmhs,
            'email' => $request->emailmhs,
            'jurusan' => $request->jurusanmhs
        ]);
        return redirect('/');
    }

    public function hapus($id){
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/');
    }
}
