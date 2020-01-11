<?php

use App\PeminjamanBuku;
use Illuminate\Database\Seeder;

class PeminjamanBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $peminjaman = new PeminjamanBuku;
       $peminjaman->no_peminjaman = 'H200';
       $peminjaman->nama_peminjam = 'Ferdinand';
       $peminjaman->tanggal_peminjaman = '10 Januari 2020';
       $peminjaman->tanggal_kembali = "11 February 2020";
       $peminjaman->denda_peminjaman = 10000;
       $peminjaman->keterangan_peminjaman = "Buku Ini Sangat Menarik dan Saya Suka Membacanya";
       $peminjaman->save();
        
    }
}
