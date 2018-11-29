<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\LabelLaporan;
use App\Toko;

class LaporanController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function data(){
    	$siswa = \Auth::user()->siswas_id;
    	$data['laporan'] = Laporan::where('Siswa_id', $siswa)->orderby('id', 'desc')->get();
    	$data['count_laporan'] = Laporan::where('Siswa_id', $siswa)->count();

    	return view('app.laporan.data_laporan.index')->with($data);
    }
    public function report(){
    	$data['toko'] = Toko::all();
    	$data['label_laporan'] = LabelLaporan::all();
    	return view('app.laporan.lapor.add')->with($data);
    }
    public function save(Request $r){
    	$laporan = new Laporan;
    	$laporan->Label = $r->input('Label');
    	$laporan->Deskripsi_laporan = $r->input('Deskripsi_laporan');
    	$laporan->Status = "Pending";
    	$laporan->Siswa_id = $r->input('Siswa_id');
    	$laporan->Toko_id = $r->input('Toko_id');

    	$laporan->save();

    	return redirect()->route('dataLaporan');
    }
    public function guideReport(){
    	return view('app.panduan_laporan.index');
    }
    public function edit($id){
    	$data['laporan'] = Laporan::find($id);
    	$data['toko'] = Toko::all();
    	$data['label_laporan'] = LabelLaporan::all();

    	return view('app.laporan.lapor.edit')->with($data);
    }
    public function update(Request $r, $id){
    	$laporan = Laporan::find($id);
    	$laporan->Label = $r->input('Label');
    	$laporan->Deskripsi_laporan = $r->input('Deskripsi_laporan');
    	$laporan->Status = "Pending";
    	$laporan->Siswa_id = $r->input('Siswa_id');
    	$laporan->Toko_id = $r->input('Toko_id');

    	$laporan->save();

    	return redirect()->route('dataLaporan');
    }
    public function send(Request $r,$id){
    	$laporan = Laporan::find($id);
    	$laporan->Status = "Terkirim";
    	$laporan->save();
    	return redirect()->route('dataLaporan');
    }
    public function delete($id){
    	Laporan::find($id)->delete();
    	return redirect()->route('dataLaporan');
    }
}
