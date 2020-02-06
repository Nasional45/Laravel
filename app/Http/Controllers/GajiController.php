<?php

namespace App\Http\Controllers;

use App\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Gaji = Gaji::all();
         return view('Gaji.indexgaji',compact('Gaji'));
    }
    public function show($id)
    {
         $Gaji = Gaji::find($id);
         return view('Gaji.showgaji',compact('Gaji'));
    }
}
