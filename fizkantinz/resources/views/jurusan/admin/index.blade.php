@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Jurusan</p>
        <p class="h5">Jurusan / <a href="#">home</a></p>
    </div>
    <div>
        <a href="jurusan/tambahJurusan" class="btn btn-primary borderrad"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">No</th>
                        <th scope="col">Nama jurusan</th>
                        <th scope="col">Paket Keahlian</th>
                        <th scope="col">Kaprog Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jurusan as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->Nama_jurusan }}</td>
                        <td>{{ $res->Paket_keahlian }}</td>
                        <td>{{ $res->Kaprog_jurusan }}</td>
                        <td class="action-table"><a href="{{ url('jurusan/editJurusan/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a> <a href="{{ url('jurusan/hapusJurusan/'.$res->id) }}" onclick="return confirm('Konfirmasi hapus jurusan')" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
