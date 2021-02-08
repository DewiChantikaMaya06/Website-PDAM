<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaliknamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baliknama', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_sebelumnya', 30);
            $table->string('nama_pengaju', 30);
            $table->string('no_ktp', 30);
            $table->string('alamat', 100);
            $table->string('gambar_ktp');
            $table->string('gambar_rekening');
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
        Schema::dropIfExists('baliknama');
    }
}
