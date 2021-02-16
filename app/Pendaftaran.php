<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $fillable = ['nama', 'no_ktp', 'alamat', 'rt', 'rw', 'no_hp', 'gambar_ktp', 'status'];
    use SoftDeletes;
}
