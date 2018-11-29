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

$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home')->middleware('siswa');

Route::prefix('/laporan')->group(function(){
	Route::get('dataLaporan', 'LaporanController@data')->name('dataLaporan')->middleware('siswa');
	Route::get('lapor', 'LaporanController@report')->name('lapor')->middleware('siswa');
	Route::post('simpanLaporan', 'LaporanController@save')->name('saveLaporan')->middleware('siswa');
	Route::get('editLaporan/{id}', 'LaporanController@edit')->middleware('siswa');
	Route::post('updateLaporan/{id}', 'LaporanController@update')->name('updateLaporan')->middleware('siswa');
	Route::post('kirimLaporan/{id}', 'LaporanController@send')->middleware('siswa');
	Route::get('hapusLaporan/{id}', 'LaporanController@delete')->middleware('siswa');
});

Route::get('/dataDiri', 'DataDiriController@index')->name('dataDiri')->middleware('siswa');
Route::get('/panduanLaporan', 'LaporanController@guideReport')->name('panduanLaporan')->middleware('siswa');
