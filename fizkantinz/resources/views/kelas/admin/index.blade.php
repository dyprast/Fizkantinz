@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Kelas</p>
        <p class="h5">Kelas / <a href="#">home</a></p>
    </div>
    <div>
        <a href="kelas/tambahKelas" class="btn btn-primary borderrad"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">No</th>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Jumlah Siswa</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->Nama_kelas }}</td>
                        <td>{{ $res->jurusan->Nama_jurusan }}</td>
                        <td>{{ $res->Jumlah_siswa }}</td>
                        <td class="action-table"><a href="{{ url('kelas/editKelas/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a> <a href="{{ url('kelas/hapusKelas/'.$res->id) }}" onclick="return confirm('Konfirmasi hapus kelas')" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
