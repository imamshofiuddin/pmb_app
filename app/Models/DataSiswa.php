<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;
    protected $table = 'data_siswa';
    protected $fillable = [
        'no_peserta',
        'id_prodi',
        'id_user',
        'nisn',
        'nama_lengkap',
        'jenis_kelamin',
        'alamat_rumah',
        'kota',
        'ttl',
        'asal_sekolah',
        'tahun_ijazah',
        'hp',
        'email',
        'nama_ortu',
        'pekerjaan_ortu',
        'penghasilan_ortu',
        'status',
    ];
}
