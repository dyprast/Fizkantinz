@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Laporan</p>
        <p class="h5">Laporan / <a href="#">detailLaporan</a></p>
    </div>
    <div>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>{{ strtoupper($laporan->Label) }}</b>
                </div>
                <div class="card-body">
                    <div class="header-body">
                        <p>Untuk : <b>{{ $laporan->toko->Nama_toko }} // {{ $laporan->toko->jurusan->Nama_jurusan }}</b></p>
                    </div>
                    <p>{{ $laporan->Deskripsi_laporan }}</p>
                    <div class="footer-body">
                        <p>Dari : <b>{{ $laporan->siswa->Nama }} - {{ $laporan->siswa->kelas->Nama_kelas }}</b></p>
                    </div>
                    @if($laporan->Status == "Terkirim")
                    <div class="action-body">
                        <form method="POST" action="{{ url('laporan/terimaLaporan/'.$laporan->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary"><b>TERIMA</b></button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
