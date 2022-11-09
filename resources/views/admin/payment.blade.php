@extends('layouts.app')

@section('content')
{{-- Navbar --}}
@include('admin.components.navbar')

{{-- Main Content --}}
<div class="container mt-5">
<table class="table"> 
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>status</th>
        <th>Konfirmasi</th>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td></td>
                <td>{{ $item->name }}</td>
                <td><img class="w-50" src="{{ asset('upload/struk/'.$item->foto) }}" alt=""></td>
                <td>{{ $item->status }}</td>
                <td>
                    @if ($item->status == 'waiting')
                        <form action="{{ route('confirmPayment') }}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $item->user_id }}">
                            <button type="submit" class="btn btn-warning" name="acc" onclick="return confirm('Apakah anda yakin ?');">Accept</button> | 
                            <button type="submit" class="btn btn-danger" name="deny">Deny</button>
                        </form>
                    @elseif($item->status == 'acc')
                        <form action="{{ route('confirmPayment') }}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $item->user_id }}"> 
                            <button type="submit" class="btn btn-danger" name="deny">Cancel</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
