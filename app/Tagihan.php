<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';
    protected $fillable = ['no_pelanggan', 'nama', 'alamat', 'no_sambungan', 'jumlah_rekening', 'tagihan_air', 'denda', 'segel', 'total_tagihan'];
    protected $primaryKey = 'no_pelanggan';
}
