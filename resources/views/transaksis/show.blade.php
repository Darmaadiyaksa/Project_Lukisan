@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <h1>Detail Transaksi</h1>

        <div class="card">
            <div class="card-header">
                Kode Transaksi: {{ $transaksi->kode_transaksi }}
            </div>
            <div class="card-body">
                <p>Kode Lukisan: {{ $transaksi->kode_lukisan }}</p>
                <p>ID Pegawai: {{ $transaksi->id_pegawai }}</p>
                <p>Tanggal Transaksi: {{ $transaksi->tanggal_transaksi }}</p>
                <p>Total: {{ $transaksi->total }}</p>
                <p>Keterangan: {{ $transaksi->keterangan }}</p>
            </div>
        </div>

        <a href="{{ route('transaksis.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection