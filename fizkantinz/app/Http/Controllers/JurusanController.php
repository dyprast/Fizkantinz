<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	function index(){
    	$data['jurusan'] = Jurusan::orderby('Nama_jurusan', 'desc')->get();
    	return view('jurusan.admin.index')->with($data);
    }
    function add(){
    	return view('jurusan.admin.add');
    }
    function save(Request $r){
    	$jurusan = new Jurusan;
    	$jurusan->Nama_jurusan = $r->input('Nama_jurusan');
    	$jurusan->Paket_keahlian = $r->input('Paket_keahlian');
    	$jurusan->Kaprog_jurusan = $r->input('Kaprog_jurusan');

    	$jurusan->save();
    	return redirect(url('jurusan'));
    }
    function edit($id){
    	$data['jurusan'] = Jurusan::find($id);
    	return view('jurusan.admin.edit')->with($data);
    }
    function update(Request $r, $id){
    	$jurusan = Jurusan::find($id);
    	$jurusan->Nama_jurusan = $r->input('Nama_jurusan');
    	$jurusan->Paket_keahlian = $r->input('Paket_keahlian');
    	$jurusan->Kaprog_jurusan = $r->input('Kaprog_jurusan');

    	$jurusan->save();
    	return redirect(url('jurusan'));
    }
    function delete($id){
    	Jurusan::find($id)->delete();
    	return redirect(url('jurusan'));
    }
}
