<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Exam extends Model
{
    use HasFactory;
    protected $table = 'exam';
    protected $fillable = [
        'id_peserta',
        'nilai'
    ];

    static function getSiswa() {
        $result=DB::table('data_siswa')->join('exam','data_siswa.id','=','exam.id_peserta');

        return $result;
    }
}
