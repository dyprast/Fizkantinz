<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    public function toko(){
    	return $this->belongsTo('App\Toko','Toko_id');
    }
    public function siswa(){
    	return $this->belongsTo('App\Siswa','Siswa_id');
    }
    public function kelas(){
    	return $this->belongsTo('App\Kelas','Kelas_id');
    }
}
