@extends('layouts.app', ['title' => 'ujian'])

@section('content')

<div class="container mt-5">
    @if ($server->status == 'ditutup')
        Sesi Ujian Ditutup, silahkan menunggu administrator membuka server ujian
    @else
        <h1>Ujian Seleksi Masuk PENS 2021</h1>
        @if($errors->any())
            <p class="text-danger">{{ $errors->first() }}</p>
        @endif
        <form action="{{ route('cek_peserta') }}" method="post">
            @csrf
            <p>Masukkan nomor peserta anda</p>
            <input type="text" name="no_peserta" class="form-control">
            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    @endif
</div>
    
@endsection