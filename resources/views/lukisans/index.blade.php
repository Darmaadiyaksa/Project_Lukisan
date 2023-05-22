@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <h1>Daftar Lukisan</h1>
        <a href="{{ route('lukisans.create') }}" class="btn btn-primary mb-3">Tambah Lukisan</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Lukisan</th>
                    <th>Judul Lukisan</th>
                    <th>Nama Pelukis</th>
                    <th>Ukuran panjang</th>
                    <th>Ukuran Lebar</th>
                    <th>Material</th>
                    <th>Status Lukisan</th>
                    <th>Status lelang</th>
                    <th>Tahun Dibuat</th>
                    <th>Gambar</th>
                    <th>deskripsi</th>
                    <th>keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lukisans as $lukisan)
                    <tr>
                        <td>{{ $lukisan->kode_lukisan }}</td>
                        <td>{{ $lukisan->judul_lukisan }}</td>
                        <td>{{ $lukisan->nama_pelukis }}</td>
                        <td>{{ $lukisan->uk_panjang }}</td>
                        <td>{{ $lukisan->uk_lebar }}</td>
                        <td>{{ $lukisan->material }}</td>
                        <td>{{ $lukisan->status_lukisan }}</td>
                        <td>{{ $lukisan->status_pelelangan }}</td>
                        <td>{{ $lukisan->tahun_dibuat }}</td>
                        <td>@if ($lukisan->gambar)
                                                    <img src="{{ asset('images/' . $lukisan->gambar) }}"
                                                        alt="{{ $lukisan->nama_lukisan }}" style="max-height: 100px;">
                                                @else
                                                    Tidak Ada Gambar
                                                @endif</td>
                        <td>{{ $lukisan->deskripsi }}</td>
                        <td>{{ $lukisan->keterangan }}</td>
                        <td>
                            <a href="{{ route('lukisans.show', $lukisan->kode_lukisan) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ route('lukisans.edit', $lukisan->kode_lukisan) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('lukisans.destroy', $lukisan->kode_lukisan) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus lukisan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection