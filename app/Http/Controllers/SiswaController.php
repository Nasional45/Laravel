<?php

namespace App\Http\Controllers;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
         $siswa = Siswa::all();
         return $siswa;
    }
    public function show($id)
    {
         $siswa = Siswa::find($id);
         return $siswa;
    }
    public function buatdatasiswa($nama,$nis){
       $siswa = new Siswa();
       $siswa->nama          = $nama;
       $siswa->nis           = $nis;
       $siswa->kelas         = 'XI RPL 3';
       $siswa->jurusan       = "Rekayasa Perangkat Lunak";
       $siswa->alamat        = "Kapling";
       $siswa->tgl_lahir     = "2003-4-21";
       $siswa->save();
       return $siswa;
    }
    public function update($id,$nama,$nis){
        $siswa = Siswa::find($id);
        $siswa->nama          = $nama;
        $siswa->nis           = $nis;
        $siswa->kelas         = 'XI RPL 3';
        $siswa->jurusan       = "Rekayasa Perangkat Lunak";
        $siswa->alamat        = "Kapling";
        $siswa->tgl_lahir = "2003-4-21";
        $siswa->save();
        return $siswa;
    }
    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }
}
