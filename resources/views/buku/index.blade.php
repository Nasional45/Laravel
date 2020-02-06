<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Buku</center>
    <table border ="1">
    <thread>
    <tr>
         <th>Judul</th>
         <th>Jumlah Halaman</th>
         <th>Penerbit</th>
         <th>Status</th>
         <th>Sinopsis</th>
         <th>Aksi</th>
    </tr>
    </thread>
    <tbody>
    @foreach($buku as $book)
    <tr>
         <td>{{$book->judul}}</td>
         <td>{{$book->jumlah_halaman}}</td>
         <td>{{$book->penerbit}}</td>
         <td>{{$book->status}}</td>
         <td>{{$book->penerbit}}</td>
         <td><a href="/book/{{ $book->id }}">Lihat</a></td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>