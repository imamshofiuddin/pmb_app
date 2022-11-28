<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>

    <p>No. Peserta = {{ $no_peserta }}</p>
    <p>Nama = {{ $nama }}</p>
    <p>Foto : </p>
    <img src="{{ public_path("upload/foto_peserta/".$foto) }}" style="width: 150px; height: 200px;" alt="">
</body>
</html>