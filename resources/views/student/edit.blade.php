@extends('layouts.app',['title' => 'Update Data Siswa'])

@section('content')
    <div class="container mt-5">
        <form action="{{ route('updateDataSiswa', ['id' => $siswa->id]) }}" method="post" enctype="multipart/form-data">
        <div class="row gap-0">
                @csrf
                <div class="col-lg-6 data-diri">
                    Data Diri
                    <input class="form-control my-2" type="text" name="nisn" placeholder="NISN" value="{{ $siswa->nisn }}">
                    <input class="form-control my-2" type="text" name="nama" placeholder="Nama" value="{{ $siswa->nama_lengkap }}">
                    <input class="form-control my-2" type="text" name="gender" placeholder="Jenis Kelamin" value="{{ $siswa->jenis_kelamin }}">
                    <input class="form-control my-2" type="text" name="alamat" placeholder="Alamat Rumah" value="{{ $siswa->alamat_rumah }}">
                    <input class="form-control my-2" type="text" name="kota" placeholder="Kota" value="{{ $siswa->kota }}">
                    <input class="form-control my-2" type="date" name="ttl" placeholder="Tanggal Lahir" value="{{ $siswa->ttl }}">
                </div>
                <div class="col-lg-6 data-ortu">
                    Data Orang Tua
                    <input class="form-control my-2" type="text" name="name-parent" placeholder="Nama Orang Tua" value="{{ $siswa->nama_ortu }}">
                    <input class="form-control my-2" type="text" name="job-parent" placeholder="Pekerjaan Orang Tua" value="{{ $siswa->pekerjaan_ortu }}">
                    <input class="form-control my-2" type="number" name="sal-parent" placeholder="Penghasilan Orang Tua" value="{{ $siswa->penghasilan_ortu }}">
                </div>
                <div class="col-lg-6 data-sekolah">
                    Data Sekolah
                    <input class="form-control my-2" type="text" name="name-school" placeholder="Asal Sekolah" value="{{ $siswa->asal_sekolah }}">
                    <input class="form-control my-2" type="text" name="year-ijazah" placeholder="Tahun Ijazah" value="{{ $siswa->tahun_ijazah }}">
                </div>
                <div class="col-lg-6 data-sekolah">
                    Foto Peserta
                    <input class="form-control my-2" type="file" accept="image/*" name="foto" id="foto">
                    <div class="mb-3" id="img-preview"></div>
                </div>
                <button class="w-100 btn btn-primary" type="submit">Update</button>
        </div>
        </form>
    </div>
@endsection
