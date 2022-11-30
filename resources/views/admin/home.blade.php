@extends('layouts.app',['title' => 'Dashboard Admin'])

@section('content')
{{-- Navbar --}}
@include('admin.components.navbar')

{{-- Main Content --}}

<div class="container-fluid" style="background-color: #4d25db">
    <div class="container p-4">
        <h3 class="fw-semibold py-5 text-white fs-4">Selamat Datang <span class="d-block fs-1">Admin!</span></h3>
    </div>
</div>

<div class="container" style="margin-top: -5%;">
    <div class="row g-2 mb-2">
        <div class="col-lg-6">
            <div class="card w-100 border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <h5 class="card-title fw-semibold fs-3">Pembayaran</h5>
                            <p class="card-text">Tinjau pembayaran dari para siswa dengan aman</p>
                            <a href="{{ route('payment') }}"><button class="btn btn-dark w-100">Lihat</button></a>
                        </div>
                        <div class="col-5 text-end">
                            <iconify-icon style="font-size: 5rem; color: #00c23a" icon="ic:baseline-payments"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card w-100 border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <h5 class="card-title fw-semibold fs-3">Ranking</h5>
                            <p class="card-text">Lihat peringkat siswa yang telah melakukan ujian</p>
                            <a href="{{ route('ranking') }}"><button class="btn btn-dark w-100">Lihat</button></a>
                        </div>
                        <div class="col-5 text-end">
                            <iconify-icon style="font-size: 5rem; color: #a200ff" icon="icon-park-solid:ranking-list"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card w-100 border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <h5 class="card-title fw-semibold fs-3">Server Ujian</h5>
                            <p class="card-text">Kelola server ujian untuk mengaktifkan atau mematikan server ujian tes</p>
                            <a href="{{ route('server-exam') }}"><button class="btn btn-dark w-100">Lihat</button></a>
                        </div>
                        <div class="col-5 text-end">
                            <iconify-icon style="font-size: 5rem; color: #db256b" icon="healthicons:i-exam-multiple-choice"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card w-100 border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <h5 class="card-title fw-semibold fs-3"> Server Pengumuman</h5>
                            <p class="card-text">Kelola server pengumuman untuk akses pengumuman kelulusan bagi siswa</p>
                            <a href="{{ route('server-announcement') }}"><button class="btn btn-dark w-100">Lihat</button></a>
                        </div>
                        <div class="col-5 text-end">
                            <iconify-icon style="font-size: 5rem; color: #ff9900" icon="mdi:announcement"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
