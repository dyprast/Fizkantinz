@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Siswa</p>
        <p class="h5">Siswa / <a href="#">editSiswa</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('siswa/updateSiswa/'.$siswa->id) }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="NIS">NIS</label>
                                <input type="number" class="form-control{{ $errors->has('NIS') ? ' is-invalid' : '' }}" id="NIS" placeholder="NIS" required name="NIS" value="{{ $siswa->NIS }}">
                            </div>
                            <div class="form-group col-9">
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control{{ $errors->has('Nama') ? ' is-invalid' : '' }}" id="Nama" placeholder="Nama" required="" name="Nama" value="{{ $siswa->Nama }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="Kelas_id">Kelas</label>
                                <select name="Kelas_id" class="form-control{{ $errors->has('Kelas_id') ? ' is-invalid' : '' }}" required>
                                    <option value="{{ $siswa->Kelas_id }}" style="background-color: #111;color: #fff;">{{ $siswa->kelas->Nama_kelas }}</option>
                                    @foreach($kelas as $key)
                                    <option value="{{ $key->Nama_kelas }}">{{ $key->Nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-4">
                                <label for="Jenis Kelamin">Jenis Kelamin</label>
                                <select name="Jenis_kelamin" class="form-control{{ $errors->has('Jenis_kelamin') ? ' is-invalid' : '' }}" required>
                                    <option value="{{ $siswa->Jenis_kelamin }}" style="background-color: #111;color: #fff;">{{ $siswa->Jenis_kelamin }}</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label for="Tempat Lahir">Tempat Lahir</label>
                                <select name="Tempat_lahir" class="form-control{{ $errors->has('Tempat_lahir') ? ' is-invalid' : '' }}" required>
                                    <option value="{{ $siswa->Tempat_lahir }}" style="background-color: #111;color: #fff;">{{ $siswa->Tempat_lahir }}</option>
                                    <option value="Aceh">Aceh</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Bengkulu">Bengkulu</option>
                                    <option value="Jakarta">Jakarta Raya</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                    <option value="Jawa Timur">Jawa Timur</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Papua">Papua</option>
                                    <option value="Yogyakarta">Yogyakarta</option>
                                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                    <option value="Lampung">Lampung</option>
                                    <option value="NTB">Nusa Tenggara Barat</option>
                                    <option value="NTT">Nusa Tenggara Timur</option>
                                    <option value="Riau">Riau</option>
                                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                    <option value="Sumatera Barat">Sumatera Barat</option>
                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                    <option value="Maluku">Maluku</option>
                                    <option value="Maluku Utara">Maluku Utara</option>
                                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                                    <option value="Sulawesi Selatan">Sumatera Selatan</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Gorontalo">Gorontalo</option>
                                    <option value="Bangka">Bangka Belitung</option>
                                </select>
                            </div>
                            <div class="form-group col-2">
                                <label for="Tanggal Lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control{{ $errors->has('Tanggal Lahir') ? ' is-invalid' : '' }}" id="Tanggal_lahir" placeholder="Tanggal Lahir" required="" name="Tanggal_lahir" value="{{ $siswa->Tanggal_lahir }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="Agama">Agama</label>
                                <select name="Agama" class="form-control{{ $errors->has('Agama') ? ' is-invalid' : '' }}" required>
                                    <option value="{{ $siswa->Agama }}" style="background-color: #111;color: #fff;">{{ $siswa->Agama }}</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                <label for="Status" style="margin-top: 10px;">Status</label>
                                <select name="Status" class="form-control" readonly>
                                    <option value="{{ $siswa->Status }}">{{ $siswa->Status }}</option>
                                </select>
                            </div>
                            <div class="form-group col-9">
                                <label for="Alamat">Alamat</label>
                                <textarea class="form-control{{ $errors->has('Alamat') ? ' is-invalid' : '' }}" name="Alamat" id="Alamat" placeholder="Alamat" required style="height: 110px;">{{ $siswa->Alamat }}</textarea>
                            </div>
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
