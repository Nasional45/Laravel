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
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;

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

Route::get('profil1','ContohController@latihan2');

Route::get('profil2','ContohController@latihan3');

Route::get('profil3','ContohController@latihan4');

Route::get('biodata','BiodataController@latihan5');

Route::get('menu/{mkn?}','MenuController@menu');

Route::get('pesan/{pesan1?}/{pesan2?}/{harga2?}','PesanController@pesan');

//Crud Buku
Route::get('get-buku','BukuController@index');
Route::get('create-buku/{judul}','BukuController@buatdata');
Route::get('get-buku/{id}','BukuController@show');
Route::get('delete-buku/{id}','BukuController@delete');
Route::get('update-buku/{id}/{judul}','BukuController@update');
Route::get('hitung-buku','BukuController@hitungbuku');
Route::get('data','BukuController@buatdata');

//Crud Siswa
Route::get('get-siswa','SiswaController@index');
Route::get('create-siswa/{nama}/{nis}','SiswaController@buatdatasiswa');
Route::get('show-siswa','SiswaController@show');
Route::get('delete-siswa/{id}','SiswaController@delete');
Route::get('update-siswa/{id}/{nama}/{nis}','SiswaController@update');

//Passing Data
Route::get('passing','PracticeController@pass');
Route::get('passing1','PracticeController@pass1');
Route::get('status/{status?}','PracticeController@status');
Route::get('buku','PracticeController@loop');

//book
Route::get('book','BukuController@index');
Route::get('book/{id}','BukuController@show');

//gaji
Route::get('gaji','GajiController@index');
Route::get('gaji/{id}','GajiController@show');

//Belajar Blade Templating
Route::get('/profil',function(){
    return view('profil');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/blogger',function(){
    return view('blogger');
});

//Relasi 1
Route::get('relasi-1', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});

//Relasi 2
Route::get('relasi-2', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();
    
    # Tampilkan nama wali mahasiswa
    return $mahasiswa->dosen->nama;
});

//Relasi 3
Route::get('relasi-3', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $dosen = Dosen::where('nama', '=', 'Yulianto')->first();
    
    # Tampilkan nama wali mahasiswa
    foreach ($dosen->mahasiswa as $temp)
    echo '<li> Nama : ' .$temp->nama . 
            ' <strong> ' . $temp->nim . '</strong></li>';
        });
   
//Relasi 4
Route::get('relasi-4', function() {

    # Temukan mahasiswa bernama noviyanto
    $novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();
    # Menampilkan Seluruh hobi si novay
    foreach ($novay->hobi as $temp)
    echo '<li>' . $temp->hobi . '</li>';             
});

Route::get('relasi-5', function() {

    # mencari data mandi hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();
        
    # Tampilkan nama wali mahasiswa
    foreach ($mandi_hujan->mahasiswa as $temp)
    echo '<li> Nama : ' .$temp->nama . 
            ' <strong> ' . $temp->nim . '</strong></li>';
            
});

Route::get('eloquent', function() {
        $data = Mahasiswa::with('wali', 'dosen', 'hobi')->get();
        return view('eloquent', compact('data'));
});



