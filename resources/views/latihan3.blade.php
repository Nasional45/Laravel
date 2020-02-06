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
    @foreach($buku as $data)
    Judul      = {{  $data['judul'] }} <br>
    Penerbit   = {{  $data['penerbit'] }} <br>
    Harga      = {{  $data['harga'] }} <br>
    Penulis    = {{  $data['penulis'] }} <br>
    
    @if($data['harga'] >= 150000 && $data['harga'] < 200000)
    @php $status = "Regular"; @endphp
    @elseif($data['harga'] > 200000)
    @php $status = "Premium"; @endphp
    @elseif($data['harga'] < 150000)
    @php $status = "Bajakan"; @endphp
    @endif

    @if($status == "Premium" ||  $status == "Regular")
    @php $keterangan = "Anda Pembeli Cerdas" @endphp
    @else
    @php $keterangan = "Anda Pembeli Kurang Cerdas" @endphp
    @endif
    Status : {{ $status }}<br>
    Keterangan : {{ $keterangan }}
    <hr>
    @endforeach
</body>
</html>