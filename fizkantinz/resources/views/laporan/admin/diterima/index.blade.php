@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Laporan</p>
        <p class="h5">Laporan / <a href="#">diterima</a></p>
    </div>
    <div>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">No</th>
                        <th scope="col">Untuk Toko</th>
                        <th scope="col">Dari</th>
                        <th scope="col">Label</th>
                        <th scope="col">Deskripsi Laporan</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($laporan as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->toko->Nama_toko }}</td>
                        <td>{{ $res->siswa->Nama }} / {{ $res->siswa->kelas->Nama_kelas }}</td>
                        <td>{{ $res->Label }}</td>
                        <td>{{ substr($res->Deskripsi_laporan, 0, 70) }}...</td>
                        <td><a href="{{ url('laporan/detailLaporan/'.$res->id) }}" class="btn btn-success"><i class="fas fa-book-reader"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
