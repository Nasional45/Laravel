<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function pesan($a = null, $b = null, $harga = null)
    {
    if(isset($a)) {
        $a = "Anda Memesan $a";
    }
    if(isset($b)) {
        $b=" & ".$b ;
    }
    if($harga >= 25000){  
        $harga = 'Anda Mendapatkan Ukuran Jumbo';
    }
    else if($harga <= 25000 && $harga > 15000){  
        $harga = 'Anda Mendapatkan Ukuran Medium';
    }   
    else if($harga <= 15000 && $harga > 0){  
        $harga = 'Anda Mendapatkan Ukuran Normal';
    }
    else{
        $harga = "Anda Te Boga Duit Mending Balik";
    } 
    if(!isset($a)) {
        $a = "Anda Belum Memesan Sesuatu";
    }
    return view('test5', compact('a','b','harga'));
}
}
