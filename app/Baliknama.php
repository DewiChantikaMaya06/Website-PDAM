<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baliknama extends Model
{
    protected $table = 'baliknama';
    protected $fillable = ['nama_sebelumnya', 'nama_pengaju', 'no_ktp', 'alamat', 'gambar_ktp', 'gambar_rekening'];
}
