<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->string('no_ktp', 16);
            $table->string('alamat', 100);
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->string('no_hp', 13);
            $table->string('gambar_ktp');
            $table->enum('status',['Verifikasi','Belum verifikasi'])->default('Belum verifikasi')->nullable;
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
