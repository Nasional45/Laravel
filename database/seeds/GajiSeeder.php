<?php
use\App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new Gaji;
       $buku->nip = '111';
       $buku->nama = 'Ferdinand';
       $buku->agama = 'Islam';
       $buku->jenis_kelamin = "Pria";
       $buku->alamat = "pasawahan";
       $buku->jabatan = "Maneger";
       $buku->jam_kerja = "250";
       $buku->save();

       $buku = new Gaji;
       $buku->nip = '222';
       $buku->nama = 'Asep Sopian';
       $buku->agama = 'Islam';
       $buku->jenis_kelamin = "Pria";
       $buku->alamat = "Kota Baru";
       $buku->jabatan = "Sekretaris";
       $buku->jam_kerja = "200";
       $buku->save();
       
       $buku = new Gaji;
       $buku->nip = '333';
       $buku->nama = 'Azfa Andrean';
       $buku->agama = 'Islam';
       $buku->jenis_kelamin = "Pria";
       $buku->alamat = "Permata Kopo";
       $buku->jabatan = "Staff";
       $buku->jam_kerja = "150";
       $buku->save();
    }
}
