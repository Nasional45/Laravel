<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $nama   = "Ucup Abdul Mustofa";
        $alamat = "Gang Haji Sulam";
        return view('latihan', compact('nama','alamat'));
    }

    public function pass1()
    {
        $gaji = 200000;
        return view('latihan1',['penghasilan'=> $gaji]);
    }

    public function status($status = 'jomblo')
    {
        return view('latihan2',compact('status'));
    }

    public function loop()
    {
        $buku = [
        ['judul'=>'Bangkit Dari Remedial','penerbit'=>'Erlanga',
        'harga'=>100000,'penulis'=>'Aku Yang Suka Remidi'
        ],
        ['judul'=>'Tips Move On Dari Kamu','penerbit'=>'Erlanga',
        'harga'=>150000,'penulis'=>'Eful'
        ],
        ['judul'=>'Kekuatan 1/3 Malam','penerbit'=>'Erlanga',
        'harga'=>250000,'penulis'=>'Mutia'
        ]
    ];
    return view('latihan3',compact('buku')); 
    }
}
