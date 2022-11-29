@extends('layouts.app', ['title' => 'Ranking'])

@section('content')
    @include('admin.components.navbar')
    <p>Urutkan Berdasarkan : </p>
    <form action="{{ route('ranking.byprodi') }}" method="post">
        @csrf
        <select name="sort" class="form-control">
            @if (isset($activeProdi))
                <option value="{{ $activeProdi->id }}">{{ $activeProdi->nama_prodi }}</option>
            @endif
            <option value="all">Semua</option>
            @foreach ($prodis as $prodi)
                @if ($prodi->nama_prodi != 'no_prodi')
                    <option value="{{ $prodi->id }}">Prodi {{ $prodi->nama_prodi }}</option>
                @endif
            @endforeach
        </select>
        <button type="submit">Terapkan</button>
    </form>
    @foreach ($ranking as $item)
        <p>Nama : {{ $item->nama_lengkap }}</p>
        <p>No Peserta : {{ $item->no_peserta }}</p>
        <p>Prodi : {{ $item->id_prodi }}</p>
        <p>Nilai : {{ $item->nilai }}</p>
        <p>status : {{ $item->status }}</p>
        <br><br>
    @endforeach
@endsection