@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Kelas</p>
        <p class="h5">Kelas / <a href="#">editKelas</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('kelas/updateKelas/'.$kelas->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Kelas</label>
                            <input type="text" class="form-control{{ $errors->has('Nama_kelas') ? ' is-invalid' : '' }}" id="formGroupExampleInput" placeholder="Nama Kelas" name="Nama_kelas" value="{{ $kelas->Nama_kelas }}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Jurusan</label>
                            <select class="form-control{{ $errors->has('Jurusan_id') ? ' is-invalid' : '' }}" name="Jurusan_id">
                                <option value="{{ $kelas->Jurusan_id }}" style="background-color: #111;color: #fff;">{{ $kelas->jurusan->Nama_jurusan }}</option>
                                @foreach($jurusan as $key)
                                <option value="{{ $key->id }}">{{ $key->Nama_jurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Jumlah Siswa</label>
                            <input type="number" class="form-control{{ $errors->has('Jumlah_siswa') ? ' is-invalid' : '' }}" id="formGroupExampleInput" placeholder="Jumlah Siswa" name="Jumlah_siswa" value="{{ $kelas->Jumlah_siswa }}">
                        </div>
                        <div class="action-form">
                            <button type="submit" class="btn btn-primary borderrad">Ubah</button>
                        </div>
                    </form>
                </div>              
            </div>
        </div>
    </div>
</div>
@endsection
