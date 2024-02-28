@extends('kerangka.adminmaster')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Tambah Produk</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{route('produk.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Kode</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="Kode" name="Kode" class="form-control @error('Kode') is invalid

                                @enderror"
                                valid="{{old('Kode')}}" placeholder="Kode">
                                @error('Kode')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="Nama" name="Nama" class="form-control @error('Nama') is invalid

                                @enderror"
                                valid="{{old('Nama')}}" placeholder="Nama">
                                @error('Nama')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Harga</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="Harga" class="form-control @error('Harga') is invalid

                                @enderror"
                                name="Harga" value="{{old('Harga')}}" placeholder="Harga">
                                @error('Harga')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Gambar</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="file" id="Gambar" class="form-control @error('Gambar') is invalid
                                @enderror"
                                name="Gambar" value="{{old('Gambar')}}" placeholder="Gambar">
                                @error('Gambar')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Stok</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="Stok" name="Stok" class="form-control @error('Stok') is invalid

                                @enderror"
                                valid="{{old('Stok')}}" placeholder="Stok">
                                @error('Stok')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
