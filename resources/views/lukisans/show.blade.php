@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <h1>Detail Lukisan</h1>

        <div class="card">
            <div class="card-body">
            <td>@if ($lukisan->gambar)
                                                    <img src="{{ asset('images/' . $lukisan->gambar) }}"
                                                        alt="{{ $lukisan->nama_lukisan }}" style="max-height: 400px;">
                                                @else
                                                    Tidak Ada Gambar
                                                @endif</td>
                <h5 class="card-title">Kode Lukisan: {{ $lukisan->kode_lukisan }}</h5>
                <p class="card-text">Judul Lukisan: {{ $lukisan->judul_lukisan }}</p>
                <p class="card-text">Nama Pelukis: {{ $lukisan->nama_pelukis }}</p>
                <p class="card-text">Ukuran: {{ $lukisan->uk_panjang }} x {{ $lukisan->uk_lebar }}</p>
                <p class="card-text">Material: {{ $lukisan->material }}</p>
                <p class="card-text">Tahun Dibuat: {{ $lukisan->tahun_dibuat }}</p>
                <p class="card-text">Deskripsi: {{ $lukisan->deskripsi }}</p>
                <p class="card-text">Status Lukisan: {{ $lukisan->status_lukisan }}</p>
                <p class="card-text">Status Pelelangan: {{ $lukisan->status_pelelangan }}</p>
                <p class="card-text">Keterangan: {{ $lukisan->keterangan }}</p>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('lukisans.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('lukisans.edit', $lukisan->kode_lukisan) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('lukisans.destroy', $lukisan->kode_lukisan) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus lukisan ini?')">Hapus</button>
            </form>
        </div>
    </div>
@endsection