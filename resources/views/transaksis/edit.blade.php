@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <h1>Tambah Transaksi</h1>

        <form action="{{ route('transaksis.update', $transaksi->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="kode_lukisan">Kode Lukisan:</label>
                <input value="{{$transaksi->kode_lukisan}}" type="text" name="kode_lukisan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="id_pegawai">ID Pegawai:</label>
                <input value="{{$transaksi->id_pegawai}}" type="text" name="id_pegawai" class="form-control" required>
            </div>

            <div class="form-group">
                   <label for="tanggal_transaksi">Tanggal Transaksi:</label>
                   <input value="{{$transaksi->tanggal_transaksi}}" type="date" name="tanggal_transaksi" class="form-control" required>
               </div>

               <div class="form-group">
                   <label for="total">Total:</label>
                   <input value="{{$transaksi->total}}" type="number" name="total" step="0.01" class="form-control" required>
               </div>

               <div class="form-group">
                   <label for="keterangan">Keterangan:</label>
                   <textarea name="keterangan" class="form-control">{{$transaksi->keterangan}}</textarea>
               </div>

               <button type="submit" class="btn btn-primary">Simpan</button>
           </form>
       </div>
   @endsection