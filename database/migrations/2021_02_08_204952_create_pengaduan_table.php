<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->string('alamat', 150);
            $table->string('no_hp', 13);
            $table->string('no_pelanggan', 30);
            $table->enum('jenis', ['air_keruh', 'kebocoran', 'meter','pemakaian','tda','lain_lain']);
            $table->date('kerusakan');
            $table->text('isi_pengaduan', 500);
            $table->enum('status',['selesai','belum']);
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
        Schema::dropIfExists('pengaduan');
    }
}
