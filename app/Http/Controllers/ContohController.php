<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan()
    {
        return 'Ini Contoh Latihan Controller';
    }
    public function latihan2()
    {
        $a = 'Mahmud';
        $b = 'Zulkarnaen';
        return 'Nama Saya Adalah '.$a. ' '.$b;
    }
    public function latihan3()
    {
        $a = 'Dadang Mambo';
        return view('test', compact('a'));
    }
    public function latihan4()
    {
        $a = 'Icip Nirin';
        return view('test2',['nama' => $a]);
    }

}
