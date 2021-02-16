<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = ['judul', 'gambar_kegiatan', 'deskripsi'];
    use SoftDeletes;
}
