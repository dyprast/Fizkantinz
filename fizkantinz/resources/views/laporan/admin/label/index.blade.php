@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Label Laporan</p>
        <p class="h5">labelLaporan / <a href="#">home</a></p>
    </div>
    <div>
        <a href="{{ url('labelLaporan/tambahLabelLaporan') }}" class="btn btn-primary borderrad"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">No</th>
                        <th scope="col">Label</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($label_laporan as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->Label }}</td>
                        <td><a href="{{ url('labelLaporan/editLabelLaporan/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a> <a href="{{ url('labelLaporan/hapusLabelLaporan/'.$res->id) }}" onclick="return confirm('Konfirmasi hapus Label')" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
