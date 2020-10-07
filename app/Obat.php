<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    protected $fillable = [
    	'code',
    	'nama_obat',
    	'jenis',
    	'harga',
    ];

    public function supply()
    {
    	return $this->hasMany(Supply::class);
    }
}
