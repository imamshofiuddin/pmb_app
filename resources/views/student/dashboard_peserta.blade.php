
@extends('layouts.app',['title' => 'Dashboard - Profile'])

@section('content')
@include('student.components.navbar')
    <div class="container my-5">
        <h1 class="fw-bolder" style="color: navy">Selamat Datang</h1>
        <div class="row mt-3">
            <div class="col-lg-7">
                <div class="card shadow-sm border-0 mb-3">
                    <h5 style="height: 50px;" class="card-header fw-semibold border-bottom-0 text-secondary fs-4">{{ $siswa->nama_lengkap }}</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="rounded" style="width: 150px; height: 200px" src="{{ asset('upload/foto_peserta/'.$siswa->foto) }}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <p style="color: navy" class="fs-6 fw-semibold">NISN <span class="text-dark fs-5 d-block">{{ $siswa->nisn }}</span></p>
                                <p style="color: navy" class="fs-6 fw-semibold">Asal Sekolah <span class="text-dark fs-5 d-block">{{ $siswa->asal_sekolah }}</span></p>
                                <p style="color: navy" class="fs-6 fw-semibold">Tahun Ijazah <span class="text-dark fs-5 d-block">{{ $siswa->tahun_ijazah }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm border-0 mb-3">
                    <h5 style="height: 50px;" class="card-header fw-semibold border-bottom-0 text-secondary fs-4">Orang Tua</h5>
                    <div class="card-body">
                        <p style="color: navy" class="fs-6 fw-semibold">Nama <span class="text-dark fs-5 d-block">{{ $siswa->nama_ortu }}</span></p>
                        <p style="color: navy" class="fs-6 fw-semibold">Pekerjaan <span class="text-dark fs-5 d-block">{{ $siswa->pekerjaan_ortu }}</span></p>
                        <p style="color: navy" class="fs-6 fw-semibold">Penghasilan <span class="text-dark fs-5 d-block">{{ $siswa->penghasilan_ortu }}</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card shadow-sm border-0 mb-3 h-100">
                    <h5 style="height: 50px;" class="card-header fw-semibold border-bottom-0 text-secondary fs-4">Data Diri</h5>
                    <div class="card-body">
                        <p style="color: navy" class="fs-6 fw-semibold">Tanggal Lahir <span class="text-dark fs-5 d-block">{{ $siswa->ttl }}</span></p>
                        <p style="color: navy" class="fs-6 fw-semibold">Jenis Kelamin <span class="text-dark fs-5 d-block">{{ $siswa->jenis_kelamin }}</span></p>
                        <p style="color: navy" class="fs-6 fw-semibold">Asal Kota <span class="text-dark fs-5 d-block">{{ $siswa->kota }}</span></p>
                        <p style="color: navy" class="fs-6 fw-semibold">Alamat Rumah <span class="text-dark fs-5 d-block">{{ $siswa->alamat_rumah }}</span></p>
                        <p style="color: navy" class="fs-6 fw-semibold">Nomor HP <span class="text-dark fs-5 d-block">{{ $siswa->hp }}</span></p>
                        <p style="color: navy" class="fs-6 fw-semibold">Email <span class="text-dark fs-5 d-block">{{ $siswa->email }}</span></p>
                    </div>
                </div>
            </div>
        </div>

        @if ($siswa->is_final == 'not_final')
            <a href="{{ route('showSiswa', ['id'=>$siswa->id]) }}"><button class="btn btn-primary">Ubah Data</button></a>            
        @endif

        {{-- <a href="{{ url("/pdf-download/{$siswa->id}") }}"><button class="btn btn-primary">Download PDF</button></a> --}}
    </div>
@endsection