<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->bigInteger('no_pelanggan')->primary();
            $table->string('nama', 50);
            $table->text('alamat');
            $table->string('no_sambungan', 50);
            $table->integer('jumlah_rekening');
            $table->integer('tagihan_air');
            $table->integer('denda');
            $table->integer('segel');
            $table->integer('total_tagihan');
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
        Schema::dropIfExists('tagihan');
    }
}
