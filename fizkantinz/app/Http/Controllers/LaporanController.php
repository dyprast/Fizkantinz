<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\Toko;
use App\Siswa;
use App\Kelas;

class LaporanController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
    function index(){
    	$data['laporan'] = Laporan::where('Status', "Terkirim")->orderby('id', 'desc')->get();
        $data['laporan_count'] = Laporan::where('Status', "Terkirim")->orderby('id', 'desc')->count();
    	return view('laporan.admin.index')->with($data);
    }
    public function indexDiterima(){
    	$data['laporan'] = Laporan::where('Status', "Diterima")->orderby('id', 'desc')->get();
        $data['laporan_count'] = Laporan::where('Status', "Diterima")->orderby('id', 'desc')->count();
    	return view('laporan.admin.diterima.index')->with($data);
    }
    public function detail($id){
    	$data['laporan'] = Laporan::find($id);

    	return view('laporan.admin.detail')->with($data);
    }
    public function accept($id){
    	$laporan = Laporan::find($id);
    	$laporan->Status = "Diterima";
    	$laporan->save();

    	return redirect()->route('laporan');
    }
}
