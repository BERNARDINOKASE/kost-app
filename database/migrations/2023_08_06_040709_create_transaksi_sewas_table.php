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
        Schema::create('transaksi_sewas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penyewa');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->date('tanggal_lahir');
            $table->string('nama_kampus');
            $table->string('status');
            $table->string('no_hp');
            $table->string('asal_kota');
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
        Schema::dropIfExists('transaksi_sewas');
    }
};
