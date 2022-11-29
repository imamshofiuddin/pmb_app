<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JawabanSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answer')->insert([
            // 1+1
            ['id_soal' => 1, 'deskripsi' => '1', 'poin' => 0],
            ['id_soal' => 1, 'deskripsi' => '2', 'poin' => 1],
            ['id_soal' => 1, 'deskripsi' => '3', 'poin' => 0],
            ['id_soal' => 1, 'deskripsi' => '4', 'poin' => 0],

            // 2+2
            ['id_soal' => 2, 'deskripsi' => '1', 'poin' => 0],
            ['id_soal' => 2, 'deskripsi' => '2', 'poin' => 0],
            ['id_soal' => 2, 'deskripsi' => '3', 'poin' => 0],
            ['id_soal' => 2, 'deskripsi' => '4', 'poin' => 1],

            // 3+3
            ['id_soal' => 3, 'deskripsi' => '5', 'poin' => 0],
            ['id_soal' => 3, 'deskripsi' => '6', 'poin' => 1],
            ['id_soal' => 3, 'deskripsi' => '7', 'poin' => 0],
            ['id_soal' => 3, 'deskripsi' => '8', 'poin' => 0],

            // 4+4
            ['id_soal' => 4, 'deskripsi' => '5', 'poin' => 0],
            ['id_soal' => 4, 'deskripsi' => '6', 'poin' => 0],
            ['id_soal' => 4, 'deskripsi' => '7', 'poin' => 0],
            ['id_soal' => 4, 'deskripsi' => '8', 'poin' => 1],

            // 5+5
            ['id_soal' => 5, 'deskripsi' => '10', 'poin' => 1],
            ['id_soal' => 5, 'deskripsi' => '11', 'poin' => 0],
            ['id_soal' => 5, 'deskripsi' => '12', 'poin' => 0],
            ['id_soal' => 5, 'deskripsi' => '13', 'poin' => 0],

            // 6+6
            ['id_soal' => 6, 'deskripsi' => '11', 'poin' => 0],
            ['id_soal' => 6, 'deskripsi' => '12', 'poin' => 1],
            ['id_soal' => 6, 'deskripsi' => '13', 'poin' => 0],
            ['id_soal' => 6, 'deskripsi' => '14', 'poin' => 0],

            // 7+7
            ['id_soal' => 7, 'deskripsi' => '11', 'poin' => 0],
            ['id_soal' => 7, 'deskripsi' => '12', 'poin' => 0],
            ['id_soal' => 7, 'deskripsi' => '13', 'poin' => 0],
            ['id_soal' => 7, 'deskripsi' => '14', 'poin' => 1],



        ]);
    }
}
