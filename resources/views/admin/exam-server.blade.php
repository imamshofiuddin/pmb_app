@extends('layouts.app', ['title' => 'Pembayaran Peserta'])

@section('content')
{{-- Navbar --}}
@include('admin.components.navbar')

{{-- Main Content --}}
<div class="container mt-5">
    <p>Status Ujian : {{ $server->status }}</p>
    @if ($server->status == 'ditutup')
        <form action="{{ route('open-exam') }}" method="post">
            @csrf
            <button onclick="return confirm('Yakin ingin membuka ujian ?')">Buka Ujian</button>
        </form>
    @else
        <form action="{{ route('close-exam') }}" method="post">
            @csrf
            <button onclick="return confirm('Yakin ?')">Tutup Ujian</button>
        </form>
    @endif

</div>
@endsection
