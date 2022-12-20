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
        Schema::create('bts_towers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenisdaya_id');
            $table->foreign('jenisdaya_id')->references('id')->on('jenis_sumber_dayas')->onDelete('cascade');
            $table->unsignedBigInteger('penyedia_id');
            $table->foreign('penyedia_id')->references('id')->on('penyedia_layanans')->onDelete('cascade');
            $table->unsignedBigInteger('tipesite_id');
            $table->foreign('tipesite_id')->references('id')->on('tipe_sites')->onDelete('cascade');
            $table->unsignedBigInteger('tipetower_id');
            $table->foreign('tipetower_id')->references('id')->on('tipe_towers')->onDelete('cascade');
            $table->string('nama');
            $table->string('gambar');
            $table->integer('tinggi_tower');
            $table->string('longitude');
            $table->string('latitude');
            $table->integer('radius');
            $table->integer('lahan');
            $table->text('alamat');
            $table->integer('nilai_kontrak');
            $table->string('kota');
            $table->string('provinsi');
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
        Schema::dropIfExists('bts_towers');
    }
};
