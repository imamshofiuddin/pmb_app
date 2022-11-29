@extends('layouts.app', ['title' => 'Pembayaran Peserta'])

@section('content')
{{-- Navbar --}}
@include('admin.components.navbar')

{{-- Main Content --}}
<div class="container mt-5">
    <p>Status : {{ $server->status }}</p>
    @if ($server->status == 'ditutup')
        <form action="{{ route('open-announcement') }}" method="post">
            @csrf
            <button onclick="return confirm('Yakin ingin membuka pengumuman sekarang ?')">Buka Pengumuman</button>
        </form>
    @else
        <form action="{{ route('close-announcement') }}" method="post">
            @csrf
            <button onclick="return confirm('Yakin ?')">Tutup Pengumuman</button>
        </form>
    @endif

</div>
@endsection
