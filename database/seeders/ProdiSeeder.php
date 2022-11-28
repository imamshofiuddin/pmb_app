<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::create([
            'nama_prodi' => 'no_prodi'
        ]);

        Prodi::create([
            'nama_prodi' => 'it'
        ]);

        Prodi::create([
            'nama_prodi' => 'elka'
        ]);
    }
}
