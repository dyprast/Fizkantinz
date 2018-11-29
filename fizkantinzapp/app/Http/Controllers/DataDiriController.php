<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class DataDiriController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$siswa_id = \Auth::user()->siswas_id;
    	$data['siswa'] = Siswa::where('id', $siswa_id)->get();
    	return view('app.data_diri.index')->with($data);
    }
}
