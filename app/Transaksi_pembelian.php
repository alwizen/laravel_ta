<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi_pembelian extends Model
{
    protected $fillable = [
        'id_transaksi', 'id_supplier', 'tanggal', 'total',
    ];
}
