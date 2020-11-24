<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = ['nama','judul','jumlah','harga','nominalpembayaran','kembalian','tanggal'];
}
