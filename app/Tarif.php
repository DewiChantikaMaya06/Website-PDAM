<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table = 'tarif';
    protected $fillable = ['klasifikasi', 'kelompok', 'pemakaian1', 'pemakaian2', 'pemeliharaan', 'admin', 'denda'];
}
