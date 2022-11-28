@extends('layouts.app', ['title' => 'pengumuman'])

@section('content')
<div class="container mt-5">
    <h1>Pengumuman Penerimaan Mahasiswa Baru PENS 2023</h1>


    @if (isset($data))
        @if ($data->status == 'unpassed')
            <p>Maaf kamu belum lolos</p>
        @else
            <h1>Selamat Anda Lolos</h1>
            <p>Silahkan Download Bukti Kelulusan Di Bawah Ini :</p>
            <a href="{{ url("/lolos-pmb/{$data->id}") }}"><button class="btn btn-primary">Download Bukti Lolos</button></a>
        @endif
    @else
        @if($errors->any())
            <p class="text-danger">{{ $errors->first() }}</p>
        @endif
        <form action="{{ route('cek_hasil') }}" method="post">
            @csrf
            <p>Masukkan nomor peserta anda</p>
            <input type="text" name="no_peserta" class="form-control">
            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    @endif
</div>
@endsection