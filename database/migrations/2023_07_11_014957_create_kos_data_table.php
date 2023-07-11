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
        Schema::create('kos_data', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kos');
            $table->tinyInteger('tipe_kamar')->comment('1=>putra, 2=>putri, 3=>campur');
            $table->text('deskripsi');
            $table->string('nama_pengelola')->nullable();
            $table->string('no_hp_pengelola')->nullable();
            $table->string('peraturan', '255');
            $table->string('foto_bgnan_tampak_depan')->nullable();
            $table->string('foto_bgnan_dalam')->nullable();
            $table->string('foto_bgnan_dari_jalan')->nullable();
            $table->string('foto_km_depan')->nullable();
            $table->string('foto_km_dalam')->nullable();
            $table->string('foto_km_mandi')->nullable();
            $table->char('fasilitas_kamar', '255');
            $table->char('fasilitas_kamar_mandi', '255');
            $table->char('fasilitas_umum', '255');
            $table->char('alamat', '255');
            $table->integer('p_kamar');
            $table->integer('l_kamar');
            $table->integer('jlh_kamar');

            $table->integer('harga');

            // $table->string('ukuran_kamar');
            // $table->tinyInteger('jumlah_kamar');
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
        Schema::dropIfExists('kos_data');
    }
};
