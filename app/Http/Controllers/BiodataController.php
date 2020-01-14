<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function latihan5()
    {
        $a  = 'Mocahamad Ferdinand Alvyantoro';
        $b  = 'Islam';
        $c  = 'Laki-Laki';
        $d  = 'Kapling Pasawahan';
        $e  = 'SMK Assalaam';
        $f  = 'XI RPL 3';
        $g  = 'Rekayasa Perangkat Lunak (RPL)';
        $h  = 'Ngepush Terus Ampe Grandmaster';
        $i  = '16 Tahun';
        return view('test3',['nama' => $a, 'agama' => $b, 'jeniskelamin' => $c, 'alamat' => $d, 'sekolah' => $e, 'kelas' => $f
        , 'jurusan' => $g, 'hobi' => $h, 'umur' => $i]);
    }
}
