<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodi')->insert([
            ['nama_prodi' => 'no_prodi'],
            ['nama_prodi' => 'D4 Teknik Informatika'],
            ['nama_prodi' => 'D4 Teknik Elektronika'],
            ['nama_prodi' => 'D4 Teknik Elektro Industri'],
            ['nama_prodi' => 'D4 Teknik Mekatronika'],
            ['nama_prodi' => 'D4 Teknik Sistem Pembangkit Energi'],
            ['nama_prodi' => 'D4 Teknologi Game'],
        ]);
    }
}
