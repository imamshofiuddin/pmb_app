<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('no_peserta');
            $table->foreignId('id_prodi')->constrained('prodi');
            $table->foreignId('id_user')->constrained('users');
            $table->string('nisn');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->text('alamat_rumah');
            $table->string('kota');
            $table->date('ttl');
            $table->string('asal_sekolah');
            $table->string('tahun_ijazah');
            $table->string('hp');
            $table->string('email');
            $table->string('nama_ortu');
            $table->string('pekerjaan_ortu');
            $table->integer('penghasilan_ortu');
            $table->string('status')->default('unpassed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_siswa');
    }
};
