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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_registrasi')->unique();
            $table->foreignId('dokter_id');
            $table->string('nama_pasien');
            $table->string('alamat_pasien');
            $table->string('no_telp_pasien');
            $table->string('jenis_kelamin_pasien');
            $table->string('golongan_darah_pasien');
            $table->string('tempat_lahir_pasien');
            $table->date('tanggal_lahir_pasien');
            $table->date('tanggal_daftar_pasien');
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
        Schema::dropIfExists('pasiens');
    }
};