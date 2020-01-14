<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu($a='Tuak')
    {
        return view('test4', compact('a'));
}   
    public function menu2($a)
    {
        return view('test4', compact('a'));
}
}