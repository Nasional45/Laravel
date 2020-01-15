<?php

namespace App\Http\Controllers;
use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
         $buku = Buku::select('judul','jumlah_halaman','penerbit')->get();
         return $buku;
    }
    public function show($id)
    {
         $buku = Buku::find($id);
         return $buku;
    }
    public function hitungbuku()
    {
         $buku = Buku::count();
         return $buku;
    }
    public function buatdata($judul){
       $buku = new Buku();
       $buku->judul = $judul;
       $buku->jumlah_halaman = 2000;
       $buku->penerbit = 'Pt Garena Indonesia';
       $buku->synopsis = "Kalo Mau Menjadi Pro Player Harus Selalu Berusaha";
       $buku->status = 1;
       $buku->save();
       return $buku;
    }
    public function update($id,$judul){
        $buku = Buku::find($id);
        $buku->judul = $judul;
        $buku->jumlah_halaman = 2000;
        $buku->penerbit = 'Pt Garena Indonesia';
        $buku->synopsis = "Kalo Mau Menjadi Pro Player Harus Selalu Berusaha";
        $buku->status = 1;
        $buku->save();
        return $buku;
    }
    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }
}