@extends('layouts.app', ['title' => 'ujian'])

@section('content')

<div class="container mt-5">
    <h1>Peraturan Ujian</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum deleniti laboriosam perferendis culpa assumenda adipisci libero delectus. Nam ad facilis recusandae corrupti aspernatur eaque doloribus fugit, praesentium rem vel suscipit.</p>
    <a href="{{ route('start_exam') }}"><button class="btn btn-primary" onclick="return confirm('Apakah sudah siap ?')">Mulai Ujian</button></a>
</div>
    
@endsection