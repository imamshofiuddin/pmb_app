
@extends('layouts.app',['title' => 'Dashboard - Profile'])

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
    <div class="container my-5">
        <a class="nav-item active" href="">Profile</a>
        <a href="">Pilihan</a>
        <a href="">Finalisasi</a>

        <h1>Selamat Datang {{ $siswa->nama_lengkap }}</h1>
        <p>Nomor Peserta : {{ $siswa->no_peserta }}</p>
        <p>NISN : {{ $siswa->nisn }}</p>
        <p>Nama Lengkap : {{ $siswa->nama_lengkap }}</p>
        <a href="{{ route('showSiswa', ['id'=>$siswa->id]) }}">Ubah Data</a>
        <p>Foto : </p>
        <img style="width: 150px; height: 200px" src="{{ asset('upload/foto_peserta/'.$siswa->foto) }}" alt="">

        <a href="{{ url("/pdf-download/{$siswa->id}") }}"><button class="btn btn-primary">Download PDF</button></a>
    </div>
@endsection