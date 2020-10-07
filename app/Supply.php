<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    protected $table = 'supply';
    protected $fillable = [
    	'obat_id',
    	'apotik_id',
    	'stok'
    ];

    public function obat()
    {
    	return $this->belongsTo(Obat::class);
    }
}
