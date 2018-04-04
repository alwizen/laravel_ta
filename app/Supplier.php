<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'id_supplier', 'nama_supplier', 'telp', 'alamat',
    ];
}
