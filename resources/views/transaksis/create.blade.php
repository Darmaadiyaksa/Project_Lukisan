@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <h1>Tambah Transaksi</h1>

        <form action="{{ route('transaksis.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="kode_lukisan">Kode Lukisan:</label>
                <input type="text" name="kode_lukisan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="id_pegawai">ID Pegawai:</label>
                <input type="text" name="id_pegawai" class="form-control" required>
            </div>

            <div class="form-group">
                   <label for="tanggal_transaksi">Tanggal Transaksi:</label>
                   <input type="date" name="tanggal_transaksi" class="form-control" required>
               </div>

               <div class="form-group">
                   <label for="total">Total:</label>
                   <input type="number" name="total" step="0.01" class="form-control" required>
               </div>

               <div class="form-group">
                   <label for="keterangan">Keterangan:</label>
                   <textarea name="keterangan" class="form-control"></textarea>
               </div>

               <button type="submit" class="btn btn-primary">Simpan</button>
           </form>
       </div>
   @endsection