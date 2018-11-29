<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toko;
use App\Jurusan;

class TokoController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	function index(){
    	$data['toko'] = Toko::orderby('Nama_toko')->get();
    	return view('toko.admin.index')->with($data);
    }
    function add(){
    	$data['jurusan'] = Jurusan::all();
    	return view('toko.admin.add')->with($data);
    }
    function save(Request $r){
    	$toko = new Toko;
    	$toko->Nama_toko = $r->input('Nama_toko');
    	$toko->Jurusan_id = $r->input('Jurusan_id');
    	$toko->Penanggung_jawab = $r->input('Penanggung_jawab');

    	$toko->save();
    	return redirect(url('toko'));
    }
    function edit($id){
    	$data['toko'] = Toko::find($id);
    	$data['jurusan'] = Jurusan::all();
    	return view('toko.admin.edit')->with($data);
    }
    function update(Request $r, $id){
    	$toko = Toko::find($id);
    	$toko->Nama_toko = $r->input('Nama_toko');
    	$toko->Jurusan_id = $r->input('Jurusan_id');
    	$toko->Penanggung_jawab = $r->input('Penanggung_jawab');

    	$toko->save();
    	return redirect(url('toko'));
    }
    function delete($id){
    	Toko::find($id)->delete();
    	return redirect(url('toko'));
    }
}
