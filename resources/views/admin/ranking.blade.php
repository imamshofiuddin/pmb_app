@extends('layouts.app', ['title' => 'Ranking'])

@section('content')
    @include('admin.components.navbar')

    <div class="container-fluid" style="background-color: #4d25db">
        <div class="container p-4">
            <h3 class="fw-semibold py-5 text-white fs-1">Ranking</h3>
        </div>
    </div>

    <div class="container p-4" style="margin-top: -6%;">
        <p class="fs-6 fw-semibold text-white">Urutkan Berdasarkan :</p>
        <form action="{{ route('ranking.byprodi') }}" method="post">
            @csrf
            <div class="row justify-content-center mb-3">
                <div class="col-9">
                    <select name="sort" class="form-control border-0 shadow-sm">
                        @if (isset($activeProdi))
                            <option value="{{ $activeProdi->id }}">{{ $activeProdi->nama_prodi }}</option>
                        @endif
                        <option value="all">Semua</option>
                        @foreach ($prodis as $prodi)
                            @if ($prodi->nama_prodi != 'no_prodi')
                                <option value="{{ $prodi->id }}">Prodi {{ $prodi->nama_prodi }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-dark d-inline">Terapkan</button>
                </div>
            </div>
        </form>

        <table class="table bg-light p-3 rounded shadow text-center table-striped"> 
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>No. Peserta</th>
                <th>Pilihan Prodi</th>
                <th>Nilai</th>
                <th>Status kelulusan</th>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($ranking as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        @php
                            $prodi = DB::table('prodi')->where(['id' => $item->id_prodi])->first();
                        @endphp
                        <td>{{ $item->no_peserta }}
                        <td>{{ $prodi->nama_prodi }}</td>
                        <td>{{ $item->nilai }}</td>
                        <td>{{ $item->status}}</td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@endsection