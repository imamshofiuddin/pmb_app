
@extends('layouts.app',['title' => 'Dashboard - Pilih Prodi'])

@section('content')
@include('student.components.navbar')

{{-- main content --}}
<div class="container mt-5">
    <h1 class="fw-semibold mb-3">Pemilihan Program Studi</h1>

    <table class="table shadow text-center table-striped">
        <thead>
            <th>No.</th>
            <th>Nama Prodi</th>
            <th>Kapasitas Diterima</th>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
                @foreach ($prodis as $prodi)
                @if ($prodi->nama_prodi != 'no_prodi')
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $prodi->nama_prodi }}</td>
                        <td>3</td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endif
            @endforeach
        </tbody>
    </table>

    @if ($siswa->is_final == 'final')
        <p>Kamu sudah memilih prodi</p>
        <p>Prodi kamu {{ $currentProdi->nama_prodi }}</p>
        <i>Tidak bisa mengubah data, data anda sudah difinalisasi</i>
    @else
        @if ($currentProdi->nama_prodi == "no_prodi")
            Pilih Program Studi
            <form action="{{ route('submitProdi') }}" method="post">
                @csrf
                <select name="prodi" id="prodi" class="form-control">
                    @foreach ($prodis as $prodi)
                        @if ($prodi->id == $currentProdi->id)
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
            <p>Prodi kamu {{ $currentProdi->nama_prodi }}</p>
            <form action="{{ route('hapusProdi') }}" method="post">
                @csrf
                <button class="btn btn-danger" onclick="return confirm(' are u sure ?')">Batalkan pilihan</button>
            </form>
        @endif
    @endif
</div>
@endsection