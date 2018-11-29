<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    public function toko(){
    	return $this->belongsTo('App\Toko','Toko_id');
    }
}
