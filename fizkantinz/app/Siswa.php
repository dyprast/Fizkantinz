<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Siswa extends Model
{
	public $timestamps = false;
	public function kelas(){
    	return $this->belongsTo('App\Kelas','Kelas_id');
    }  
}
