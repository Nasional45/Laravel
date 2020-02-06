<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
<legend>Show Gaji</legend>
Nama          :<b>{{$Gaji->nama}}</b><br>
Agama         :<b>{{$Gaji->agama}}</b><br>
Jenis-Kelamin :<b>{{$Gaji->jenis_kelamin}}</b><br>
Alamat        :<b>{{$Gaji->alamat}}</b><br>
Jabatan       :<b>{{$Gaji->jabatan}}</b><br>
@if($Gaji->jabatan=="Maneger")
@php $uang = 5000000 @endphp

@elseif($Gaji->jabatan=="Sekretaris")
@php $uang = 3500000 @endphp

@else
@php $uang = 2500000 @endphp

@endif

Jam-Kerja     :<b>{{$Gaji->jam_kerja}}</b><br>

@if($Gaji->jam_kerja>=250)
@php $a = $uang*10/100 @endphp

@elseif($Gaji->jam_kerja>=200)
@php $a = $uang*7.5/100 @endphp

@elseif($Gaji->jam_kerja>=150)
@php $a = $uang*5/100 @endphp

@else
@php $a = 0 @endphp

@endif

Jabatan          :<b>{{ $uang }}</b><br>
Total Jam_Kerja  :<b>{{ $a }}</b><br> 
Total Gaji       :<b>{{$uang+$a}}</b>
</fieldset>
</body>
</html>