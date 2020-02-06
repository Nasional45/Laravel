<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>Daftar Buku<center>
    <table border ="1">
    <thread>
    <tr>
         <th>NIP</th>
         <th>Nama</th>
         <th>Jenis-Kelamin</th>
         <th>Jabatan</th>
         <th>Aksi</th>
    </tr>
    </thread>
    <tbody>
    @foreach($Gaji as $gaji)
    <tr>
         <td>{{$gaji->nip}}</td>
         <td>{{$gaji->nama}}</td>
         <td>{{$gaji->jenis_kelamin}}</td>
         <td>{{$gaji->jabatan}}</td>
         <td><a href="/gaji/{{ $gaji->id }}">Lihat</a></td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>