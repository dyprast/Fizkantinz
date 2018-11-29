@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Siswa</p>
        <p class="h5">Siswa / <a href="siswa">home</a></p>
    </div>
    <div>
        <a href="siswa/tambahSiswa" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <form method="GET" action="">
                <input type="text" name="search" placeholder="Cari Nama Siswa" class="input-search">
                <button type="submit" class="btn btn-primary borderrad"><i class="fas fa-search"></i></button>
            </form>
            <table class="table table-striped" style="margin-top: 20px;">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">PIN</th>
                        <th scope="col">Status</th>
                        <th scope="col">Akun Pengguna</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(Request::get('search'))
                    @foreach($siswa_search as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->NIS }}</td>
                        <td>{{ $res->Nama }}</td>
                        <td>{{ $res->kelas->Nama_kelas }}</td>
                        <td>{{ str_replace('-','',$res->Tanggal_lahir) }}</td>
                        <td>{{ $res->Status }}</td>
                        <td>
                            @if($res->Status == "Tidak Aktif")
                            <form method="POST" action="{{ url('siswa/addUser/'.$res->id) }}" id="add-user" style="padding: 0;margin: -2px;">
                                @csrf
                                <input type="hidden" name="name" value="{{ $res->Nama }}">
                                <input type="hidden" name="email" value="{{ $res->NIS }}@fizkantinz.ga">
                                <input type="hidden" name="password" value="{{ str_replace('-','',$res->Tanggal_lahir) }}">
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i> <b>USER</b></button>
                            </form>
                            @elseif($res->Status == "Aktif")
                                <a href="{{ url('siswa/deleteUser/'.$res->id) }}" type="submit" onclick="return confirm('Konfirmasi Banned Akun Pengguna')" class="btn btn-danger"><i class="fas fa-minus-circle"></i> <b>BANNED</b></a>
                                <a href="{{ url('siswa/akunUser/'.$res->id) }}" class="btn btn-primary"><i class="fas fa-user-tie"></i> <b>AKUN</b></a>
                            @endif
                        </td>
                        <td class="action-table">
                            <a href="{{ url('siswa/editSiswa/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('siswa/hapusSiswa/'.$res->id) }}" onclick="return confirm('Konfirmasi hapus')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    @foreach($siswa as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->NIS }}</td>
                        <td>{{ $res->Nama }}</td>
                        <td>{{ $res->kelas->Nama_kelas }}</td>
                        <td>{{ str_replace('-','',$res->Tanggal_lahir) }}</td>
                        <td>{{ $res->Status }}</td>
                        <td>
                            @if($res->Status == "Tidak Aktif")
                            <form method="POST" action="{{ url('siswa/addUser/'.$res->id) }}" id="add-user" style="padding: 0;margin: -2px;">
                                @csrf
                                <input type="hidden" name="name" value="{{ $res->Nama }}">
                                <input type="hidden" name="email" value="{{ $res->NIS }}@fizkantinz.ga">
                                <input type="hidden" name="password" value="{{ str_replace('-','',$res->Tanggal_lahir) }}">
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i> <b>USER</b></button>
                            </form>
                            @elseif($res->Status == "Aktif")
                                <a href="{{ url('siswa/deleteUser/'.$res->id) }}" type="submit" onclick="return confirm('Konfirmasi Banned Akun Pengguna')" class="btn btn-danger"><i class="fas fa-minus-circle"></i> <b>BANNED</b></a>
                                <a href="{{ url('siswa/akunUser/'.$res->id) }}" class="btn btn-primary"><i class="fas fa-user-tie"></i> <b>AKUN</b></a>
                            @endif
                        </td>
                        <td class="action-table">
                            <a href="{{ url('siswa/editSiswa/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('siswa/hapusSiswa/'.$res->id) }}" onclick="return confirm('Konfirmasi hapus')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
