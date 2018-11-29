<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    public $timestamps = false;
    public function jurusan(){
    	return $this->belongsTo('App\Jurusan','Jurusan_id');
    } 
}
