@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Siswa</p>
        <p class="h5">Siswa / <a href="siswa">akunUser</a></p>
    </div>
</div>
	<div class="container-admin">
		<div class="card">
			<div class="card-header" style="padding: 10px;"><b>{{ strtoupper($siswa->Nama) }}</b></div>
			<div class="card-body">
				<div class="row">
					<div class="col-5 col-md-2">
						<p>Email</p>
						<p>Password</p>
					</div>
					<div class="col-7 col-md-9">
						<p><b>: {{ $siswa->NIS }}@fizkantinz.ga</b></p>
						<p><b>: {{ str_replace('-','',$siswa->Tanggal_lahir) }}</b></p>
					</div>
				</div>
				<div class="action-body">
					<a href="{{ url('siswa/deleteUser/'.$siswa->id) }}" type="submit" onclick="return confirm('Konfirmasi Banned Akun Pengguna')" class="btn btn-danger"><i class="fas fa-minus-circle"></i> <b>BANNED</b></a>
					<a href="../" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> <b>KEMBALI<b></a>
				</div>
			</div>
		</div>
	</div>
@endsection