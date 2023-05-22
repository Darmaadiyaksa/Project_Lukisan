@extends('layouts.admin-layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Lukisan</div>

                    <div class="card-body max-w-full w-full">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            <a href="{{ route('lukisan.create') }}" class="btn btn-primary">Tambah Lukisan</a>
                        </div>
                        <div class="table-responsive">

                            <table class="table table-striped  w-full ">
                                <thead>
                                    <tr>
                                        <th>Kode Lukisan</th>
                                        <th>Judul Lukisan</th>
                                        <th>Nama Pelukis</th>
                                        <th>Panjang</th>
                                        <th>Lebar</th>
                                        <th>Material</th>
                                        <th>Gambar</th>
                                        <th>Tahun Dibuat</th>
                                        <th>Pelukis_id</th>
                                        <th>Deskripsi</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lukisans as $lukisan)
                                        <tr>
                                            <td>{{ $lukisan->kode_lukisan  }}</td>
                                            <td>{{ $lukisan->judul_lukisan }}</td>
                                            <td>{{ $lukisan->nama_pelukis }}</td>
                                            <td>{{ $lukisan->panjang }}</td>
                                            <td>{{ $lukisan->lebar }}</td>
                                            <td>{{ $lukisan->material }}</td>
                                            <td>
                                                @if ($lukisan->gambar)
                                                    <img src="{{ asset('public/lukisan/' . $lukisan->gambar) }}"
                                                        alt="{{ $lukisan->nama_lukisan }}" style="max-height: 100px;">
                                                @else
                                                    Tidak Ada Gambar
                                                @endif
                                            </td>
                                            <td>{{ $lukisan->tahun_dibuat }}</td>
                                            <td>{{ $lukisan->pelukis_id }}</td>
                                            <td>{{ $lukisan->deskripsi }}</td>
                                            <td>{{ $lukisan->keterangan }}</td>
                                            <td>
                                                <form action="{{ route('lukisan.destroy', $lukisan->kode_lukisan) }}"
                                                    method="POST">
                                                    <a href="{{ route('lukisan.edit', $lukisan->kode_lukisan) }}"
                                                        class="btn btn-primary">Edit</a>

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
