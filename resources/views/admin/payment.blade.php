@extends('layouts.app', ['title' => 'Pembayaran Peserta'])

@section('content')
{{-- Navbar --}}
@include('admin.components.navbar')

{{-- Main Content --}}
<div class="container-fluid" style="background-color: #4d25db">
    <div class="container p-4">
        <h3 class="fw-semibold py-5 text-white fs-1">Pembayaran</span></h3>
    </div>
</div>

<div class="container" style="margin-top: -3%;">
    <table class="table bg-light p-3 rounded shadow text-center table-striped"> 
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>status</th>
            <th>Konfirmasi</th>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->name }}</td>
                    <td><a target="_blank" href="{{ asset('upload/struk/'.$item->foto) }}"><img style="width: 5rem;" src="{{ asset('upload/struk/'.$item->foto) }}" alt=""></a></td>
                    <td>{{ $item->status }}</td>
                    <td>
                        @if ($item->status == 'waiting')
                            <form action="{{ route('confirmPayment') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $item->user_id }}">
                                <button type="submit" class="btn btn-success" name="acc" onclick="return confirm('Apakah anda yakin ?');">Accept</button> | 
                                <button type="submit" class="btn btn-warning" name="deny">Deny</button>
                            </form>
                        @elseif($item->status == 'acc' || 'deny')
                            <form action="{{ route('confirmPayment') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $item->user_id }}"> 
                                <button type="submit" class="btn btn-secondary" name="cancel">Cancel</button>
                                <button type="submit" class="btn btn-danger" name="delete" onclick="return confirm('Jika data ini dihapus, maka pembayaran akan dibatalkan. Yakin ?')">Hapus</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection
