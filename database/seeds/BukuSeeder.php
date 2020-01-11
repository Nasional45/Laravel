<?php
use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $buku = new Buku;
       $buku->judul = 'Belajar Php 1';
       $buku->jumlah_halaman = 100;
       $buku->penerbit = 'Gramedia Pusaka';
       $buku->synopsis = "Ini Adalah .....";
       $buku->status = 1;
       $buku->save();

       $buku = new Buku;
       $buku->judul = 'Belajar Php 2';
       $buku->jumlah_halaman = 100;
       $buku->penerbit = 'Gramedia Pusaka';
       $buku->synopsis = "Ini Adalah .....";
       $buku->status = 1;
       $buku->save();
       
       $buku = new Buku;
       $buku->judul = 'Belajar Php 3';
       $buku->jumlah_halaman = 100;
       $buku->penerbit = 'Gramedia Pusaka';
       $buku->synopsis = "Ini Adalah .....";
       $buku->status = 1;
       $buku->save();

       $buku = new Buku;
       $buku->judul = 'Belajar Php 4';
       $buku->jumlah_halaman = 100;
       $buku->penerbit = 'Gramedia Pusaka';
       $buku->synopsis = "Ini Adalah .....";
       $buku->status = 1;
       $buku->save();

       $buku = new Buku;
       $buku->judul = 'Belajar Php 5';
       $buku->jumlah_halaman = 100;
       $buku->penerbit = 'Gramedia Pusaka';
       $buku->synopsis = "Ini Adalah .....";
       $buku->status = 1;
       $buku->save();
    }
}
