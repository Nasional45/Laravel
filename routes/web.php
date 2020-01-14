<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Buku;
use App\PeminjamanBuku;

Route::get('/', function () {
    return Buku::all();
});

Route::get('a', function () {
    return view('welcome');
});

Route::get('game', function () {
    return ('Ini Halaman Gaming');
});

Route::get('bola', function () {
    return ('Ini Halaman Bola');
});

Route::get('politik', function () {
    return ('Ini Halaman Politik');
});

Route::get('teknologi', function () {
    return ('Ini Halaman Teknologi');
});

Route::get('otomotif', function () {
    return ('Ini Halaman Otomotif');
});

Route::get('variable', function () {
    $data1 = 'ini variable data 1';
    $data2 = 'ini variable data 2';
    $data3 = 'ini variable data 3';
    $data4 = 'ini variable data 4';
    $data5 = 'ini variable data 5';
    return $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5.'<br>';
});

Route::get('angkot/{jurusan1}/{jurusan2}', function () {
    $jurusan1 = 'cibaduyut - karang setra';
    $jurusan2 = 'rancamanyar - ledeng';
    $data = 'angkot jurusan:';
    return $data . ' ' . $jurusan1 . '<br>' . $data . ' '. $jurusan2;
});

Route::get('user/{nama}/{alamat}/{nomor}', function ($nama, $alamat ,$nomor) {
    return 'halo '.$nama. ' yang beralamat di ' .$alamat. ' nomor ' .$nomor; 
});

Route::get('nilai/{nilai?}', function () {
    return $nilai;
});

Route::get('user/{nama}/{nilai?}', function ($nama, $nilai='Belum Memiliki Nilai') {
    $grade='';
    if($nilai >= 50){  
    $grade = 'Grade A';
}
    else if($nilai <= 50 && $nilai >= 40){  
    $grade = 'Grade B';
}   
    else if($nilai <= 40 && $nilai >= 30){  
    $grade = 'Grade C';
}
    else if($nilai <= 30 && $nilai >= 20){  
    $grade = 'Grade D';
}
    elseif($nilai <= 20 && $nilai >= 1) {        
    $grade = 'Grade E';
}
    else{
    $grade = "Anda Tidak Dapat Grade";
}
    return 'Nama : '.$nama.'<br>' . $nilai .'<br>' . $grade;
});

Route::get('contoh','ContohController@latihan');

Route::get('profil','ContohController@latihan2');

Route::get('profil2','ContohController@latihan3');

Route::get('profil3','ContohController@latihan4');

Route::get('biodata','BiodataController@latihan5');

Route::get('menu/{mkn?}','MenuController@menu');

Route::get('pesan/{pesan1?}/{pesan2?}/{harga2?}','PesanController@pesan');

//Crud Buku
Route::get('get-buku','BukuController@index');
Route::get('create-buku','BukuController@buatdata');
Route::get('get-buku/{id}','BukuController@show');
Route::get('delete-buku/{id}','BukuController@delete');
Route::get('update-buku/{id}/{judul}','BukuController@update');
Route::get('hitung-buku','BukuController@hitungbuku');
Route::get('data','BukuController@buatdata');