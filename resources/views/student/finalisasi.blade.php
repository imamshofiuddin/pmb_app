
@extends('layouts.app',['title' => 'Dashboard - Finalisasi'])

@section('content')
@include('student.components.navbar')

<div class="container mt-5">
    <h1 class="fw-semibold mb-3">Finalisasi Data</h1>

    @if($errors->any())
        <p class="text-danger">{{ $errors->first() }}</p>
    @endif
    
    @if ($siswa->is_final == "final")
        <p>Data Anda sudah difinalisasi</p>
        <p>Kartu Peserta : </p>
        <a href="{{ url("/pdf-download/{$siswa->id}") }}"><button class="btn btn-primary">Download PDF</button></a>
        <p>selanjutnya melakukan ujian pada link di bawah ini</p><br>
        <a target="_blank" href={{ route('exam') }}><button class="btn btn-success">Ujian Tes</button></a>

    @else
        <h3>Ketentuan : </h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa voluptatibus possimus numquam, nam deleniti dolorem ex, adipisci ullam aliquam voluptatum architecto facilis provident delectus similique iste totam. Reiciendis, rem. Nam dolor laudantium exercitationem tempora assumenda. Doloremque harum asperiores neque? Voluptatibus velit consectetur iure doloremque exercitationem laborum sit dolorum asperiores quisquam, ut in sunt fugit maiores. Earum minima ullam libero, perspiciatis pariatur numquam architecto laudantium. Placeat nesciunt ullam reprehenderit earum accusantium neque dignissimos ipsum pariatur culpa quidem perferendis error magnam, architecto molestiae omnis sapiente ducimus voluptate hic eligendi dolorem id libero. Laboriosam, excepturi. Quae iusto fugiat praesentium? Asperiores amet ducimus officia.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe amet voluptatem est quaerat eum architecto neque perspiciatis illum tenetur aspernatur temporibus placeat possimus at similique enim molestias, commodi, dolore, pariatur nulla expedita sunt dolorum minus atque. Aperiam nisi, aliquid adipisci natus autem consequatur voluptatibus, beatae quisquam omnis atque, tenetur expedita.</p>
        
        <form action="{{ route('finalisasi_data') }}" method="post">
            @csrf
            <button class="btn btn-dark" type="submit" onclick="return confirm('apakah anda yakin, data tidak dapat diubah lagi ! ')">Finalisasi Data</button>
        </form>
    @endif
</div>


@endsection