<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $fillable = ['nama', 'alamat', 'no_hp', 'no_pelanggan', 'jenis', 'kerusakan', 'isi_pengaduan'];
}
