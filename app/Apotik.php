<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apotik extends Model
{
    protected $table = 'apotik';
    protected $fillable = [
    	'code',
    	'nama_apotik',
    	'alamat',
    	'no_telp',
    ];

    public function user()
    {
    	return $this->hasMany(User::class);
    }
}
