<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LabelLaporan;

class LabelLaporanController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	function index(){
    	$data['label_laporan'] = LabelLaporan::orderby('Label')->get();
        $data['label_laporan_count'] = LabelLaporan::orderby('Label')->count();
    	return view('laporan.admin.label.index')->with($data);
    }
    function add(){
    	return view('laporan.admin.label.add');
    }
    function save(Request $r){
    	$laporan = new LabelLaporan;
    	$laporan->Label = $r->input('Label');

    	$laporan->save();
    	return redirect(url('labelLaporan'));
    }
    function edit($id){
    	$data['label_laporan'] = labelLaporan::find($id);
    	return view('laporan.admin.label.edit')->with($data);
    }
    function update(Request $r, $id){
    	$laporan = LabelLaporan::find($id);
    	$laporan->Label = $r->input('Label');

    	$laporan->save();
    	return redirect(url('labelLaporan'));
    }
    function delete($id){
    	LabelLaporan::find($id)->delete();
    	return redirect(url('labelLaporan'));
    }
}
