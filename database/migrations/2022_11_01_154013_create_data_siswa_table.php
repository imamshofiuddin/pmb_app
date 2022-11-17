<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

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
            $table->foreignId('id_prodi')->nullable()->constrained('prodi');
            $table->foreignId('id_user')->constrained('users');
            $table->string('nisn');
            $table->string('nama_lengkap')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->text('alamat_rumah')->nullable();
            $table->string('kota')->nullable();
            $table->date('ttl')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('tahun_ijazah')->nullable();
            $table->string('hp')->nullable();
            $table->string('email')->nullable();
            $table->string('nama_ortu')->nullable();
            $table->string('pekerjaan_ortu')->nullable();
            $table->integer('penghasilan_ortu')->nullable();
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
