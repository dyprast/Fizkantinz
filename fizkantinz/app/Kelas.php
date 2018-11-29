<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'Nama_kelas', 'Jurusan_id', 'Jumlah_siswa'
    ];
    public function jurusan(){
    	return $this->belongsTo('App\Jurusan','Jurusan_id');
    }  
}
