@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Toko</p>
        <p class="h5">Toko / <a href="#">editJurusan</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('toko/updateToko/'.$toko->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="Nama_toko">Nama Toko</label>
                            <input type="text" class="form-control{{ $errors->has('Nama_toko') ? ' is-invalid' : '' }}" id="Nama_toko" placeholder="Nama Toko" required name="Nama_toko" value="{{ $toko->Nama_toko }}">
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="form-control{{ $errors->has('Jurusan_id') ? ' is-invalid' : '' }}" required name="Jurusan_id">
                                <option value="{{ $toko->Jurusan_id }}" style="background-color: #111;color: #fff;">{{ $toko->jurusan->Nama_jurusan }}</option>
                                @foreach($jurusan as $key)
                                <option value="{{ $key->id }}">{{ $key->Nama_jurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Penanggung Jawab</label>
                            <select class="form-control{{ $errors->has('Penanggung_jawab') ? ' is-invalid' : '' }}" required name="Penanggung_jawab">
                                <option value="{{ $toko->Penanggung_jawab }}" style="background-color: #111;color: #fff;">{{ $toko->Penanggung_jawab }}</option>
                                @foreach($jurusan as $key)
                                <option value="{{ $key->Kaprog_jurusan }}">{{ $key->Kaprog_jurusan }}</option>
                                @endforeach
                            </select>
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
