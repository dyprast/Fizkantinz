@extends('layouts.app')

@section('content')
<div class="indicators">
    <p class="h1">Dashboard</p>
    <p class="h5">Dashboard</p>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-4">
            <a href="{{ 'laporan' }}" style="text-decoration: none;"><div class="card-dashboard">
                <i class="fas fa-swatchbook"></i>
                <p class="h3">Laporan Terbaru</p>
            </div></a>
        </div>
        <div class="col-md-8">
            <a href="{{ 'toko' }}" style="text-decoration: none;"><div class="card-dashboard">
                <i class="fas fa-store-alt"></i>
                <p class="h3">Master Toko</p>
            </div></a>
        </div>
    </div>
    <div class="copyright-dashboard">
        <p>Copyright © 2018, RPL SMKN 10 Jakarta</p>
    </div>
</div>
@endsection
