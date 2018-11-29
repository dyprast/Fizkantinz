@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Laporan</p>
        <p class="h5">Laporan / <a href="#">lapor</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('saveLaporan') }}">
                        @csrf
                        <input type="hidden" name="Siswa_id" value="{{ Auth::user()->siswas_id }}">
                        <div class="form-group">
                            <label>Untuk Toko</label>
                            <select class="form-control{{ $errors->has('Toko_id') ? ' is-invalid' : '' }}" required name="Toko_id">
                                <option value="" style="background-color: #111;color: #fff;"></option>
                                @foreach($toko as $key)
                                <option value="{{ $key->id }}">{{ $key->Nama_toko }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Label Laporan</label>
                            <select class="form-control{{ $errors->has('Label') ? ' is-invalid' : '' }}" required name="Label">
                                <option value="" style="background-color: #111;color: #fff;"></option>
                                @foreach($label_laporan as $key)
                                <option value="{{ $key->Label }}">{{ $key->Label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi_laporan">Deskripsi Laporan</label>
                            <textarea style="height: 100px;" class="form-control{{ $errors->has('Deskripsi_laporan') ? ' is-invalid' : '' }}" id="Deskripsi_laporan" placeholder="Deskripsi Laporan" required name="Deskripsi_laporan"></textarea>
                        </div>
                        <div class="action-form">
                            <button type="submit" class="btn btn-primary borderrad">Simpan</button>
                        </div>
                    </form>
                </div>              
            </div>
        </div>
    </div>
</div>
@endsection
