@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Data Diri</p>
    </div>
    <div>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card-dashboard myData">
                <i class="fas fa-user-tie"></i>
                <p class="h3">Data Diri</p>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="card">
            	<div class="card-body myData">
            		<div class="row">
	            		<div class="col-4 col-md-3">
	            			<p>NIS</p>
	            			<p>Nama</p>
	            			<p>Kelas</p>
	            			<p>Jenis Kelamin</p>
	            			<p>Tempat Tanggal Lahir</p>
	            			<p>Agama</p>
	            			<p>Alamat Rumah</p>
	            		</div>
	            		<div class="col-8 col-md-9">
	            			@foreach($siswa as $key)
	            			<p><b>: {{ $key->NIS }}</b></p>
	            			<p><b>: {{ $key->Nama }}</b></p>
	            			<p><b>: {{ $key->kelas->Nama_kelas }}</b></p>
	            			<p><b>: {{ $key->Jenis_kelamin }}</b></p>
	            			<p><b>: {{ $key->Tempat_lahir }}, {{ $key->Tanggal_lahir }}</b></p>
	            			<p><b>: {{ $key->Agama }}</b></p>
	            			<p><b>: {{ $key->Alamat }}</b></p>
	            			@endforeach
	            		</div>	
	            	</div>
            	</div>
            </div>
        </div>
    </div>
    <div class="copyright-dashboard">
        <p>Copyright © 2018, RPL SMKN 10 Jakarta</p>
    </div>
</div>
@endsection
