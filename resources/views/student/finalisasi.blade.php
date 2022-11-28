
@extends('layouts.app',['title' => 'Dashboard - Finalisasi'])

@section('content')
{{-- Navbar --}}
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Penerimaan Mahasiswa Baru
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                
            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <a class="nav-item active" href="{{ route('profile') }}">Profile</a>
    <a href="{{ route('pilih_prodi') }}">Pilihan</a>
    <a href="{{ route('finalisasi') }}">Finalisasi</a>
    <h1>Finalisasi Data</h1>

    @if ($siswa->is_final == "final")
        <p>Data Anda sudah difinalisasi</p>
        <p>Kartu Peserta : </p>
        <a href="{{ url("/pdf-download/{$siswa->id}") }}"><button class="btn btn-primary">Download PDF</button></a>
        <p>selanjutnya melakukan ujian pada link di bawah ini</p><br>
        <a target="blank" href={{ route('exam') }}><button class="btn btn-success">Ujian Tes</button></a>

    @else
        <form action="{{ route('finalisasi_data') }}" method="post">
            @csrf
            <button type="submit" onclick="return confirm('apakah anda yakin, data tidak dapat diubah lagi ! ')">Finalisasi Data</button>
        </form>
    @endif
</div>


@endsection