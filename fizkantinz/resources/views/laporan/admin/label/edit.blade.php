@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Master Label Laporan</p>
        <p class="h5">labelLaporan / <a href="#">editLabelLaporan</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('labelLaporan/updateLabelLaporan/'.$label_laporan->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="Label">Label</label>
                            <input type="text" class="form-control{{ $errors->has('Label') ? ' is-invalid' : '' }}" id="Label" placeholder="Label" required name="Label" value="{{ $label_laporan->Label }}">
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
