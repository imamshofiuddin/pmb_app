<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->insert([
            ['deskripsi' => '1 + 1 ='],
            ['deskripsi' => '2 + 2 ='],
            ['deskripsi' => '3 + 3 = '],
            ['deskripsi' => '4 + 4 = '],
            ['deskripsi' => '5 + 5 = '],
            ['deskripsi' => '6 + 6 = '],
            ['deskripsi' => '7 + 7 = '],
        ]);
    }
}
