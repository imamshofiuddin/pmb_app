
@extends('layouts.app',['title' => 'Dashboard - Pilih Prodi'])

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

{{-- main content --}}
<div class="container mt-5">
    <a class="nav-item active" href="{{ route('profile') }}">Profile</a>
    <a href="{{ route('pilih_prodi') }}">Pilihan</a>
    <a href="{{ route('finalisasi') }}">Finalisasi</a><br>
    Pilih Program Studi

    @if ($siswa->is_final == 'final')
        <p>Kamu sudah memilih prodi</p>
        <p>Prodi kamu {{ $siswa->id_prodi }}</p>
        <i>Tidak bisa mengubah data, data anda sudah difinalisasi</i>
    @else
        @if ($siswa->id_prodi == 1)
            <form action="{{ route('submitProdi') }}" method="post">
                @csrf
                <select name="prodi" id="prodi" class="form-control">
                    @foreach ($prodis as $prodi)
                        @if ($prodi->id == 1)
                            <option value="{{ $prodi->id }}">-</option>
                        @else
                            <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
                        @endif
                    @endforeach
                </select>
                <button class="mt-3 btn btn-primary" type="submit">Submit Prodi</button>
            </form>
        @else
            <p>Kamu sudah memilih prodi</p>
            <p>Prodi kamu {{ $siswa->id_prodi }}</p>
            <form action="{{ route('hapusProdi') }}" method="post">
                @csrf
                <button class="btn btn-danger" onclick="return confirm(' are u sure ?')">Batalkan pilihan</button>
            </form>
        @endif
    @endif
</div>
@endsection