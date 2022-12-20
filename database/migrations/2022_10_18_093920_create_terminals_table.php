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
        Schema::create('terminals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyedia_id');
            $table->foreign('penyedia_id')->references('id')->on('penyedia_layanans')->onDelete('cascade');
            $table->string('nama');
            $table->string('kode_unik');
            $table->string('gambar');
            $table->text('keterangan');
            $table->text('alamat');
            $table->string('latitude');
            $table->string('longitude');
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
        Schema::dropIfExists('terminals');
    }
};
