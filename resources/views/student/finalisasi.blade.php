
@extends('layouts.app',['title' => 'Dashboard - Finalisasi'])

@section('content')
@include('student.components.navbar')

<div class="container mt-5">
    <a class="nav-item active" href="{{ route('profile') }}">Profile</a>
    <a href="{{ route('pilih_prodi') }}">Pilihan</a>
    <a href="{{ route('finalisasi') }}">Finalisasi</a>
    <h1>Finalisasi Data</h1>

    @if($errors->any())
        <p class="text-danger">{{ $errors->first() }}</p>
    @endif
    
    @if ($siswa->is_final == "final")
        <p>Data Anda sudah difinalisasi</p>
        <p>Kartu Peserta : </p>
        <a href="{{ url("/pdf-download/{$siswa->id}") }}"><button class="btn btn-primary">Download PDF</button></a>
        <p>selanjutnya melakukan ujian pada link di bawah ini</p><br>
        <a target="_blank" href={{ route('exam') }}><button class="btn btn-success">Ujian Tes</button></a>

    @else
        <form action="{{ route('finalisasi_data') }}" method="post">
            @csrf
            <button type="submit" onclick="return confirm('apakah anda yakin, data tidak dapat diubah lagi ! ')">Finalisasi Data</button>
        </form>
    @endif
</div>


@endsection