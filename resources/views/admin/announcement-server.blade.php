@extends('layouts.app', ['title' => 'Server Pengumuman'])

@section('content')
{{-- Navbar --}}
@include('admin.components.navbar')

{{-- Main Content --}}

<div class="container-fluid" style="background-color: #4d25db">
    <div class="container p-4">
        <h3 class="fw-semibold py-5 text-white fs-1">Server Pengumuman</h3>
    </div>
</div>


<div class="container mt-5">
    <p class="fs-3 fw-semibold">Status Pengumuman : 
        @if ($server->status == 'ditutup')
            <span class="badge text-bg-danger fs-6">Ditutup</span>
        @else 
            <span class="badge text-bg-success fs-6">Dibuka</span>
        @endif
    </p>

    @if ($server->status == 'ditutup')
        <form action="{{ route('open-announcement') }}" method="post">
            @csrf
            <p>Peringatan! Saat membuka ujian, semua orang bisa mengakses pengumuman kelulusan PMB</p>
            <button class="btn btn-warning" onclick="return confirm('Yakin ingin membuka pengumuman ?')">Buka Ujian</button>
        </form>
    @else
        <form action="{{ route('close-announcement') }}" method="post">
            @csrf
            <p>Peringatan! Saat menutup ujian, semua orang tidak bisa mengakses pengumuman kelulusan PMB</p>
            <button class="btn btn-warning" onclick="return confirm('Yakin ?')">Tutup Ujian</button>
        </form>
    @endif

</div>

@endsection
