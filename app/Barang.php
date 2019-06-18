<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table ='barangs';
    protected $fillabel = [
    	'kode',
    	'nama',
    	'suplier',
    	'harga'
    ];
}