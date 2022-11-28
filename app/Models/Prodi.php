<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $fillable = [
        'nama_prodi'
    ];

    public function dataSiswa()
    {
        return $this->belongsTo(DataSiswa::class);
    }
}
