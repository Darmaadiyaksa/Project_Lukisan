@extends('layouts.admin-layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Tambah Lukisan Baru</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('lukisan.index') }}"> Kembali</a>
                            </div>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Terdapat kesalahan pada inputan anda. Silakan coba lagi.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('lukisan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kode Lukisan:</strong>
                                    <input type="text" name="kode_lukisan" class="form-control"
                                        placeholder="Kode Lukisan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Judul Lukisan:</strong>
                                    <input type="text" name="judul_lukisan" class="form-control"
                                        placeholder="Nama Lukisan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Pelukis:</strong>
                                    <input type="text" name="nama_pelukis" class="form-control"
                                        placeholder="Nama Pelukis">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Pelukis Id</strong>
                                    <select class="form-control" name="pelukis_id" id="cars">
                                        <option selected disabled value="">-----Pilih pelukis-----
                                        </option>
                                        @foreach ($pelukis as $p)
                                            <option value="{{ $p->id }}">{{ $p->id }}-{{ $p->nama_pelukis }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ukuran Panjang:</strong>
                                    <input type="text" name="panjang" class="form-control" placeholder="Ukuran">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ukuran Lebar:</strong>
                                    <input type="text" name="lebar" class="form-control" placeholder="Ukuran">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Material:</strong>
                                    <input type="text" name="material" class="form-control" placeholder="Material">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gambar:</strong>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tahun Dibuat:</strong>
                                    <input type="text" name="tahun_dibuat" id="tahun_dibuat" class="form-control"
                                        placeholder="Tahun Dibuat">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Deskripsi:</strong>
                                    <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Deskripsi" required></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan:</strong>
                                    <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Keterangan" required></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
