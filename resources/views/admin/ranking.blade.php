@extends('layouts.app', ['title' => 'Ranking'])

@section('content')
    @include('admin.components.navbar')

    @foreach ($ranking as $item)
        <p>Nama : {{ $item->nama_lengkap }}</p>
        <p>No Peserta : {{ $item->no_peserta }}</p>
        <p>Prodi : {{ $item->id_prodi }}</p>
        <p>Nilai : {{ $item->nilai }}</p>
        <p>status : {{ $item->status }}</p>
        <br><br>
    @endforeach
@endsection