<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Siswa;
use App\Kelas;
use App\User;
use DB;

class SiswaController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
    function index(){
    	$data['siswa'] = Siswa::orderby('NIS', 'desc')->get();
        $search = \Request::get('search');
        $data['siswa_search'] = Siswa::where('Nama','like','%'.$search.'%')->orderBy('NIS')->get();
    	return view('siswa.admin.index')->with($data);
    }
    function add(){
    	$data['kelas'] = Kelas::all();
    	return view('siswa.admin.add')->with($data);
    }
    function save(Request $r){
    	$siswa = new Siswa;
    	$siswa->NIS = $r->input('NIS');
    	$siswa->Nama = $r->input('Nama');
    	$siswa->Kelas_id = $r->input('Kelas_id');
    	$siswa->Jenis_kelamin = $r->input('Jenis_kelamin');
    	$siswa->Tempat_lahir = $r->input('Tempat_lahir');
    	$siswa->Tanggal_lahir = $r->input('Tanggal_lahir');
    	$siswa->Agama = $r->input('Agama');
    	$siswa->Alamat = $r->input('Alamat');
    	$siswa->Status = $r->input('Status');

    	$siswa->save();
    	return redirect(url('siswa'));
    }
    function edit($id){
    	$data['kelas'] = Kelas::all();
    	$data['siswa'] = Siswa::find($id);
    	return view('siswa.admin.edit')->with($data);
    }
    function update(Request $r, $id){
    	$siswa = Siswa::find($id);
    	$siswa->NIS = $r->input('NIS');
    	$siswa->Nama = $r->input('Nama');
    	$siswa->Kelas_id = $r->input('Kelas_id');
    	$siswa->Jenis_kelamin = $r->input('Jenis_kelamin');
    	$siswa->Tempat_lahir = $r->input('Tempat_lahir');
    	$siswa->Tanggal_lahir = $r->input('Tanggal_lahir');
    	$siswa->Agama = $r->input('Agama');
    	$siswa->Alamat = $r->input('Alamat');
    	$siswa->Status = $r->input('Status');

    	$siswa->save();
    	return redirect(url('siswa'));
    }
    function delete($id){
    	Siswa::find($id)->delete();
    	return redirect(url('siswa'));
    }
    function createUser(Request $r, $id){
        $siswa = Siswa::find($id);
        $siswa->Status = "Aktif";

        $user = new User;
        $user->siswas_id = $id;
        $user->name = $r->input('name');
        $user->email = $r->input('email');
        $user->password = Hash::make($r->input('password'));
        $user->level = "Siswa";

        $siswa->save();
        $user->save();
        return redirect(url('siswa'));
    }
    function deleteUser($siswas_id){
        $siswa = Siswa::find($siswas_id);
        $siswa->Status = "Tidak Aktif";

        $siswa->save();

        DB::Table('users')->where('siswas_id', $siswas_id)->delete();

        return redirect(url('siswa'));
    }
    function userAccount($id){
        $data['siswa'] = Siswa::find($id);
        return view('siswa.admin.userAccount')->with($data);
    }
}
