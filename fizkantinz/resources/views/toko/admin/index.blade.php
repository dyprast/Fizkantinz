@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Toko</p>
        <p class="h5">Toko / <a href="#">home</a></p>
    </div>
    <div>
        <a href="toko/tambahToko" class="btn btn-primary borderrad"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">No</th>
                        <th scope="col">Nama Toko</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Penanggung Jawab</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($toko as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->Nama_toko }}</td>
                        <td>{{ $res->jurusan->Nama_jurusan }}</td>
                        <td>{{ $res->Penanggung_jawab }}</td>
                        <td class="action-table"><a href="{{ url('toko/editToko/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a> <a href="{{ url('toko/hapusToko/'.$res->id) }}" onclick="return confirm('Konfirmasi hapus toko')" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
