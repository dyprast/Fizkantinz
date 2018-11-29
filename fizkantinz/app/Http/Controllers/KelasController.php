<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Jurusan;

class KelasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    function index(){
    	$data['kelas'] = Kelas::orderby('Jurusan_id')->orderby('Nama_kelas')->get();
    	return view('kelas.admin.index')->with($data);
    }
    function add(){
        $data['jurusan'] = Jurusan::orderby('Nama_jurusan')->get();
    	return view('kelas.admin.add')->with($data);
    }
    function save(Request $r){
    	$kelas = new Kelas;
    	$kelas->Nama_kelas = $r->input('Nama_kelas');
    	$kelas->Jurusan_id = $r->input('Jurusan_id');
    	$kelas->Jumlah_siswa = $r->input('Jumlah_siswa');

    	$kelas->save();
    	return redirect(url('kelas'));
    }
    function edit($id){
    	$data['kelas'] = Kelas::find($id);
        $data['jurusan'] = Jurusan::orderby('Nama_jurusan')->get();
    	return view('kelas.admin.edit')->with($data);
    }
    function update(Request $r, $id){
    	$kelas = Kelas::find($id);
    	$kelas->Nama_kelas = $r->input('Nama_kelas');
    	$kelas->Jurusan_id = $r->input('Jurusan_id');
    	$kelas->Jumlah_siswa = $r->input('Jumlah_siswa');

    	$kelas->save();
    	return redirect(url('kelas'));
    }
    function delete($id){
    	Kelas::find($id)->delete();
    	return redirect(url('kelas'));
    }
}
