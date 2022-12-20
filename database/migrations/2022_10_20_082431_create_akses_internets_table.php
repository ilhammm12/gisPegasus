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
        Schema::create('akses_internets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenisdaya_id');
            $table->foreign('jenisdaya_id')->references('id')->on('jenis_sumber_dayas')->onDelete('cascade');
            $table->string('nama');
            $table->string('gambar');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('provinsi');
            $table->string('kota');
            $table->text('alamat');
            $table->string('nama_kontak');
            $table->string('email_kontak');
            $table->integer('notelp_kontak');
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
        Schema::dropIfExists('akses_internets');
    }
};
