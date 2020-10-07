<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = [
    	'obat_id',
    	'apotik_id',
    	'jumlah'
    ];

    public function obat()
    {
    	return $this->belongsTo(Obat::class);
    }
}
