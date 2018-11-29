@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Jurusan</p>
        <p class="h5">Jurusan / <a href="#">tambahJurusan</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('jurusan/simpanJurusan') }}">
                        @csrf
                        <div class="form-group">
                            <label for="Nama_jurusan">Nama jurusan</label>
                            <input type="text" class="form-control{{ $errors->has('Nama_jurusan') ? ' is-invalid' : '' }}" id="Nama_jurusan" placeholder="Nama Jurusan" required name="Nama_jurusan">
                        </div>
                        <div class="form-group">
                            <label for="Paket_keahlian">Paket Keahlian</label>
                            <select class="form-control{{ $errors->has('Paket_keahlian') ? ' is-invalid' : '' }}" required name="Paket_keahlian">
                                <option value="" style="background-color: #111;color: #fff;"></option>
                                <option value="Bisnis dan Manajemen">Bisnis dan Manajemen</option>
                                <option value="Teknologi Informasi dan Komunikasi">Teknologi Informasi dan Komunikasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Kaprog_jurusan">Kaprog Jurusan</label>
                            <input type="text" class="form-control{{ $errors->has('Kaprog_jurusan') ? ' is-invalid' : '' }}" id="Kaprog_jurusan" placeholder="Kaprog Jurusan" required name="Kaprog_jurusan">
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
