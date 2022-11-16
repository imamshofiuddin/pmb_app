@extends('layouts.app')

@section('content')
{{-- Navbar --}}
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
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

{{-- Main Content --}}
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                @if (!isset($dashboard))
                    <div class="card-header">Pembayaran</div>
                    @if (isset($paid) && $paid != null)
                        <div class="alert alert-warning rounded-0" role="alert">
                            Anda sudah upload bukti bayar, Mohon tunggu konfirmasi
                        </div>
                    @endif
                    <div class="card-body">
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif --}}
                        <img class="w-50" src="{{ asset('img/logo-bank-mandiri.png') }}" alt="">
                        <ul class="list-group mb-4">
                            <li class="list-group-item">Nama Bank : </li>
                            <li class="list-group-item">No. Rek : 0038490823048</li>
                            <li class="list-group-item">Nama : Kelompok 1</li>
                            <li class="list-group-item fw-bold">Biaya : Rp500.000</li>
                        </ul>

                    @if ($paid == null)
                        <form action="{{ route('pay') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="file" name="fotoStruk" id="fotoStruk">
                                <label for="fotoStruk"></label>
                            </div>      
                            <button class="btn btn-primary" type="submit">Kirim Bukti Pembayaran</button>                 
                        </form>
                    @endif
                    </div>
                @else
                    <div class="card-header">
                        Dashboard Peserta
                    </div>
                    <div class="card-body">
                        <p>Selamat pembayaranmu sudah terkonfirmasi, silahkan lengkapi data di bawah ini</p>
                        <form action="#" method="post">
                            @csrf
                            <input class="form-control my-2" type="text" name="nisn" placeholder="NISN">
                            <input class="form-control my-2" type="text" name="nama" placeholder="Nama">
                            <input class="form-control my-2" type="text" name="gender" placeholder="Jenis Kelamin">
                            <input class="form-control my-2" type="text" name="alamat" placeholder="Alamat Rumah">
                            <input class="form-control my-2" type="text" name="kota" placeholder="Kota">
                            <input class="form-control my-2" type="text" name="asal_sekolah" placeholder="Asal Sekolah">
                            <button class="w-100 btn btn-primary" type="submit" onclick="return confirm('apakah anda sudah yakin ?')">Simpan Data</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
