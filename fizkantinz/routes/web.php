<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(url('home'));
});
Route::get('login', function () {
});

$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');

Route::prefix('/jurusan')->group(function(){
	Route::get('/', 'JurusanController@index')->middleware('admin');
	Route::get('/tambahJurusan', 'JurusanController@add')->middleware('admin');
	Route::get('/editJurusan/{id}', 'JurusanController@edit')->middleware('admin');
	Route::get('/hapusJurusan/{id}', 'JurusanController@delete')->middleware('admin');
	Route::post('/simpanJurusan', 'JurusanController@save')->middleware('admin');
	Route::post('/updateJurusan/{id}', 'JurusanController@update')->middleware('admin');
});

Route::prefix('/kelas')->group(function(){
	Route::get('/', 'KelasController@index')->middleware('admin');
	Route::get('/tambahKelas', 'KelasController@add')->middleware('admin');
	Route::get('/editKelas/{id}', 'KelasController@edit')->middleware('admin');
	Route::get('/hapusKelas/{id}', 'KelasController@delete')->middleware('admin');
	Route::post('/simpanKelas', 'KelasController@save')->middleware('admin');
	Route::post('/updateKelas/{id}', 'KelasController@update')->middleware('admin');
});

Route::prefix('/siswa')->group(function(){
	Route::get('/', 'SiswaController@index')->middleware('admin');
	Route::get('/tambahSiswa', 'SiswaController@add')->middleware('admin');
	Route::get('/editSiswa/{id}', 'SiswaController@edit')->middleware('admin');
	Route::get('/hapusSiswa/{id}', 'SiswaController@delete')->middleware('admin');
	Route::post('/simpanSiswa', 'SiswaController@save')->middleware('admin');
	Route::post('/updateSiswa/{id}', 'SiswaController@update')->middleware('admin');
	Route::post('/addUser/{id}', 'SiswaController@createUser')->middleware('admin');
	Route::get('/deleteUser/{siswas_id}', 'SiswaController@deleteUser')->middleware('admin');
	Route::get('/akunUser/{id}', 'SiswaController@userAccount')->middleware('admin');
});

Route::prefix('/toko')->group(function(){
	Route::get('/', 'TokoController@index')->middleware('admin');
	Route::get('/tambahToko', 'TokoController@add')->middleware('admin');
	Route::get('/editToko/{id}', 'TokoController@edit')->middleware('admin');
	Route::get('/hapusToko/{id}', 'TokoController@delete')->middleware('admin');
	Route::post('/simpanToko', 'TokoController@save')->middleware('admin');
	Route::post('/updateToko/{id}', 'TokoController@update')->middleware('admin');
});

Route::prefix('/laporan')->group(function(){
	Route::get('/', 'LaporanController@index')->name('laporan')->middleware('admin');
	Route::get('/diterima', 'LaporanController@indexDiterima')->name('laporanDiterima')->middleware('admin');
	Route::get('/detailLaporan/{id}', 'LaporanController@detail')->name('detailLaporan')->middleware('admin');
	Route::post('/terimaLaporan/{id}', 'LaporanController@accept')->middleware('admin');
});

Route::prefix('/labelLaporan')->group(function(){
	Route::get('/', 'LabelLaporanController@index')->middleware('admin');
	Route::get('/tambahLabelLaporan', 'LabelLaporanController@add')->middleware('admin');
	Route::get('/editLabelLaporan/{id}', 'LabelLaporanController@edit')->middleware('admin');
	Route::get('/hapusLabelLaporan/{id}', 'LabelLaporanController@delete')->middleware('admin');
	Route::post('/simpanLabelLaporan', 'LabelLaporanController@save')->middleware('admin');
	Route::post('/updateLabelLaporan/{id}', 'LabelLaporanController@update')->middleware('admin');
});




