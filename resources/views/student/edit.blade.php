@extends('layouts.app',['title' => 'Update Data Siswa'])

@section('content')
    <div class="container mt-5">
        <form action="{{ route('updateDataSiswa', ['id' => $siswa->id]) }}" method="post" enctype="multipart/form-data">
        <div class="row gap-0">
                @csrf
                <div class="col-lg-6 data-diri">
                    Data Diri
                    <input class="form-control my-2" type="text" name="nisn" placeholder="NISN" value="{{ $siswa->nisn }}" required>
                    <input class="form-control my-2" type="text" name="nama" placeholder="Nama" value="{{ $siswa->nama_lengkap }}" required>
                    <select class="form-control" name="gender" required>
                        <option value="{{ $siswa->jenis_kelamin }}">{{ $siswa->jenis_kelamin }}</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <input class="form-control my-2" type="text" name="alamat" placeholder="Alamat Rumah" value="{{ $siswa->alamat_rumah }}" required>
                    <input class="form-control my-2" type="text" name="kota" placeholder="Kota" value="{{ $siswa->kota }}" required>
                    <input class="form-control my-2" type="date" name="ttl" placeholder="Tanggal Lahir" value="{{ $siswa->ttl }}" required>
                    <input class="form-control my-2" type="text" name="hp" placeholder="Nomor HP" value="{{ $siswa->hp }}" required>
                    <input class="form-control my-2" type="text" name="email" placeholder="Email" value="{{ $siswa->email }}" required>
                </div>
                <div class="col-lg-6 data-ortu">
                    Data Orang Tua
                    <input class="form-control my-2" type="text" name="name-parent" placeholder="Nama Orang Tua" value="{{ $siswa->nama_ortu }}" required>
                    <input class="form-control my-2" type="text" name="job-parent" placeholder="Pekerjaan Orang Tua" value="{{ $siswa->pekerjaan_ortu }}" required>
                    <input class="form-control my-2" type="number" name="sal-parent" placeholder="Penghasilan Orang Tua" value="{{ $siswa->penghasilan_ortu }}" required>
                </div>
                <div class="col-lg-6 data-sekolah">
                    Data Sekolah
                    <input class="form-control my-2" type="text" name="name-school" placeholder="Asal Sekolah" value="{{ $siswa->asal_sekolah }}" required>
                    <label for="tahun-ijazah">Tahun Ijazah</label>
                    <select class="form-control mb-3" name="year-ijazah" id="tahun_ijazah" required>
                        <option value="{{ $siswa->tahun_ijazah }}">{{ $siswa->tahun_ijazah }}</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                    </select>
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
