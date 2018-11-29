@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Kelas</p>
        <p class="h5">Kelas / <a href="#">tambahKelas</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('kelas/simpanKelas') }}">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Kelas</label>
                            <input type="text" class="form-control{{ $errors->has('Nama_kelas') ? ' is-invalid' : '' }}" id="formGroupExampleInput" placeholder="Nama Kelas" required name="Nama_kelas">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Jurusan</label>
                            <select class="form-control{{ $errors->has('Jurusan_id') ? ' is-invalid' : '' }}" required name="Jurusan_id">
                                <option value="" style="background-color: #111;color: #fff;"></option>
                                @foreach($jurusan as $key)
                                <option value="{{ $key->id }}">{{ $key->Nama_jurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Jumlah Siswa</label>
                            <input type="number" class="form-control{{ $errors->has('Jumlah_siswa') ? ' is-invalid' : '' }}" id="formGroupExampleInput" placeholder="Jumlah Siswa" required name="Jumlah_siswa">
                        </div>
                        <div class="action-form">
                            <button type="submit" class="btn btn-primary borderrad">Tambah</button>
                        </div>
                    </form>
                </div>              
            </div>
        </div>
    </div>
</div>
@endsection
