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
        Schema::create('lukisans', function (Blueprint $table) {
            $table->string('kode_lukisan')->primary();
            $table->string('judul_lukisan');
            $table->string('nama_pelukis');
            $table->integer('uk_panjang');
            $table->integer('uk_lebar');
            $table->string('material');
            $table->integer('tahun_dibuat');
            $table->text('deskripsi');
            $table->string('gambar')->nullable();
            $table->string('status_lukisan');
            $table->string('status_pelelangan');
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('lukisans');
    }
};
