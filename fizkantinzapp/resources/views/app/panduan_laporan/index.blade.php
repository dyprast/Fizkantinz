@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Panduan Laporan</p>
    </div>
    <div>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card-dashboard guide">
                <i class="fas fa-book-open"></i>
                <p class="h3">Panduan Laporan</p>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="card">
            	<div class="card-body guide">
            		<p><b>Langkah-langkah : </b></p>
            		<p>1. Pastikan akun anda terdaftar, dan terverifikasi.</p>
            		<p>2. Login menggunakan email dan password yang telah disediakan.</p>
            		<p>3. Masuk ke halaman Lapor untuk melapor kejadian yang dialami.</p>
            		<p>4. Isi form pelaporan, dan simpan laporan ke data laporan untuk eksekusi selanjutnya.</p>
            		<p>5. Jika ingin mengirim laporan, klik tombol kirim dan otomatis laporan akan terkirim ke Administrator.</p>
            		<p><b>Catatan : </b></p>
            		<p>1. Laporan yang terkirim tidak bisa dibatalkan, dihapus atau diedit. Laporan akan permanent ada.</p>
                    <p>2. Laporan dengan deskripsi yang tidak jelas, akan berakibat hukuman yaitu di non-aktifkan sebagai pengguna aplikasi.</p>
            	</div>
            </div>
        </div>
    </div>
    <div class="copyright-dashboard">
        <p>Copyright © 2018, RPL SMKN 10 Jakarta</p>
    </div>
</div>
@endsection
