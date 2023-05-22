@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <h1>Daftar Transaksi</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('transaksis.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Kode Transaksi</th>
                    <th>Kode Lukisan</th>
                    <th>ID Pegawai</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksis as $transaksi)
                    <tr>
                        <td>{{ $transaksi->id }}</td>
                        <td>{{ $transaksi->kode_lukisan }}</td>
                        <td>{{ $transaksi->id_pegawai }}</td>
                        <td>{{ $transaksi->tanggal_transaksi }}</td>
                        <td>{{ $transaksi->total }}</td>
                        <td>{{ $transaksi->keterangan }}</td>
                        <td>
                            <a href="{{ route('transaksis.show', $transaksi->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('transaksis.edit', $transaksi->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('transaksis.destroy', $transaksi->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection