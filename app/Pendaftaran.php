<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $fillable = ['nama', 'no_ktp', 'alamat', 'rt', 'rw', 'no_hp', 'gambar_ktp', 'status'];
}
