@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <h1>Edit Lukisan</h1>
        <form action="{{ route('lukisans.update', $lukisan->kode_lukisan) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_lukisan">Kode Lukisan</label>
                <input type="text" class="form-control" id="kode_lukisan" name="kode_lukisan" value="{{ $lukisan->kode_lukisan }}" required>
            </div>
            <div class="form-group">
                <label for="judul_lukisan">Judul Lukisan</label>
                <input type="text" class="form-control" id="judul_lukisan" name="judul_lukisan" value="{{ $lukisan->judul_lukisan }}" required>
            </div>
            <div class="form-group">
                <label for="nama_pelukis">Nama Pelukis</label>
                <input type="text" class="form-control" id="nama_pelukis" name="nama_pelukis" value="{{ $lukisan->nama_pelukis }}" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="uk_panjang">Ukuran Panjang</label>
                    <input type="number" class="form-control" id="uk_panjang" name="uk_panjang" value="{{ $lukisan->uk_panjang }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="uk_lebar">Ukuran Lebar</label>
                    <input type="number" class="form-control" id="uk_lebar" name="uk_lebar" value="{{ $lukisan->uk_lebar }}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="material">Material</label>
                <input type="text" class="form-control" id="material" name="material" value="{{ $lukisan->material }}" required>
            </div>
            <div class="form-group">
                <label for="tahun_dibuat">Tahun Dibuat</label>
                <input type="number" class="form-control" id="tahun_dibuat" name="tahun_dibuat" value="{{ $lukisan->tahun_dibuat }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $lukisan->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <div class="form-group">
                <label for="status_lukisan">Status Lukisan</label>
                <select class="form-control" id="status_lukisan" name="status_lukisan" required>
                    <option value="Tersedia" {{ $lukisan->status_lukisan == 'Tersedia' ? 'selected': '' }}>Tersedia</option>
<option value="Terjual" {{ $lukisan->status_lukisan == 'Terjual' ? 'selected' : '' }}>Terjual</option>
</select>
</div>
<div class="form-group">
<label for="status_pelelangan">Status Pelelangan</label>
<select class="form-control" id="status_pelelangan" name="status_pelelangan" required>
<option value="Belum Dilelang" {{ $lukisan->status_pelelangan == 'Belum Dilelang' ? 'selected' : '' }}>Belum Dilelang</option>
<option value="Dalam Proses" {{ $lukisan->status_pelelangan == 'Dalam Proses' ? 'selected' : '' }}>Dalam Proses</option>
<option value="Selesai" {{ $lukisan->status_pelelangan == 'Selesai' ? 'selected' : '' }}>Selesai</option>
</select>
</div>
<div class="form-group">
<label for="keterangan">Keterangan</label>
<textarea class="form-control" id="keterangan" name="keterangan">{{ $lukisan->keterangan }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
@endsection