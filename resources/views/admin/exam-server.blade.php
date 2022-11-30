@extends('layouts.app', ['title' => 'Server Ujian'])

@section('content')
{{-- Navbar --}}
@include('admin.components.navbar')

{{-- Main Content --}}
<div class="container-fluid" style="background-color: #4d25db">
    <div class="container p-4">
        <h3 class="fw-semibold py-5 text-white fs-1">Server Ujian</h3>
    </div>
</div>
<div class="container mt-5">
    <p class="fs-3 fw-semibold">Status Ujian : 
        @if ($server->status == 'ditutup')
            <span class="badge text-bg-danger fs-6">Ditutup</span>
        @else 
            <span class="badge text-bg-success fs-6">Dibuka</span>
        @endif
    </p>

    @if ($server->status == 'ditutup')
        <form action="{{ route('open-exam') }}" method="post">
            @csrf
            <p>Peringatan! Saat membuka ujian, semua orang bisa mengakses ujian tes PMB</p>
            <button class="btn btn-warning" onclick="return confirm('Yakin ingin membuka ujian ?')">Buka Ujian</button>
        </form>
    @else
        <form action="{{ route('close-exam') }}" method="post">
            @csrf
            <p>Peringatan! Saat menutup ujian, semua orang tidak bisa mengakses ujian tes PMB</p>
            <button class="btn btn-warning" onclick="return confirm('Yakin ?')">Tutup Ujian</button>
        </form>
    @endif

</div>
@endsection
