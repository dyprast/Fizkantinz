@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Data Laporan</p>
        <p class="h5">DataLaporan / <a href="#">home</a></p>
    </div>
    <div>
        <a href="{{ route('lapor') }}" class="btn btn-primary borderrad"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div style="text-align: center;width: 100%;">
    	@if($count_laporan == null)
    	<div class="col-12">
    		<div class="card">
                <div class="card-header" style="background-color: #00c853;color: #fff;">
                    <b>DATA BELUM TERSEDIA</b>
                </div>   
                <div class="card-body">
                    <div class="icon-wrapper">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>
            </div>
    	</div>
    	@else
        <div class="col-md-12 table-wrap">
            <table class="table table-striped report">
                <thead>
                    <tr style="color: #fff; background-color: #00c853">
                        <th scope="col">No</th>
                        <th scope="col">Untuk Toko</th>
                        <th scope="col">Label</th>
                        <th scope="col">Deskripsi Laporan</th>
                        <th scope="col">Waktu Melapor</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Kirim</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($laporan as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->toko->Nama_toko }}</td>
                        <td>{{ $res->Label }}</td>
                        <td>{{ substr($res->Deskripsi_laporan, 0, 30) }} ...</td>
                        <td>{{ $res->created_at }}</td>
                        <td><p class="alert alert-primary">{{ $res->Status }}</p></td>
                        @if($res->Status == "Pending")
                        <td class="action-table">
                        	<a href="{{ url('laporan/editLaporan/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a> 
                        	<a href="{{ url('laporan/hapusLaporan/'.$res->id) }}" onclick="return confirm('Konfirmasi hapus Laporan')" class="btn btn-danger"><i class="fas fa-trash"></i></a> 
                        </td>
                        <td>
                        	<form method="POST" action="{{ url('laporan/kirimLaporan/'.$res->id) }}">
                        		@csrf
                        		<button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i></button>
                        	</form>
                        </td>
                        @elseif($res->Status == "Terkirim")
                        <td class="text-align-center">
                        	------
                        </td>
                        <td>
                        	<button class="btn btn-warning"><i class="fas fa-check"></i></button>
                        </td>
                        @elseif($res->Status == "Diterima")
                        <td class="text-align-center">
                        	------
                        </td>
                        <td>
                        	<button class="btn btn-primary"><i class="fas fa-check"></i></button>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection
