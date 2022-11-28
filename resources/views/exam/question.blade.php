
@extends('layouts.app', ['title' => 'Ujian Tes Masuk PENS'])

@section('content')
<div class="container my-5">
    <h1>SOAL</h1>
    <form action="{{ route('submit_exam') }}" method="post">
        @csrf
        @foreach ($soals as $soal)
            <p>{{ $soal->deskripsi }}</p>
            @php
                $jawabans = DB::table('answer')->where(['id_soal' => $soal->id])->get();
            @endphp
            @foreach ($jawabans as $jawaban)
            
            <ol>
                <input type="radio" name="{{ $jawaban->id_soal }}" value={{ $jawaban->poin }}>
                {{ $jawaban->deskripsi }}<br>
            </ol>

            @endforeach
        @endforeach
        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin ingin mengakhiri ujian ?');">Akhiri Ujian</button>
    </form>
</div>
@endsection