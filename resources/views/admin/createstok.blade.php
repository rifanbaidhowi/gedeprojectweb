@extends('kerangka.adminmaster')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Tambah Stok</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{route('stok.store')}}">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nama" name="nama" class="form-control @error('nama') is invalid

                                @enderror"
                                valid="{{old('nama')}}" placeholder="Nama">
                                @error('nama')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>SKU</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="SKU" class="form-control @error('SKU') is invalid

                                @enderror"
                                name="SKU" value="{{old('SKU')}}" placeholder="SKU">
                                @error('SKU')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Jumlah</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="Jumlah" class="form-control @error('Jumlah') is invalid

                                @enderror"
                                name="Jumlah" value="{{old('Jumlah')}}" placeholder="Jumlah">
                                @error('SKU')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Keterangan</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="Keterangan" name="Keterangan" class="form-control @error('Keterangan') is invalid

                                @enderror"
                                valid="{{old('Keterangan')}}" placeholder="Keterangan">
                                @error('Keterangan')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
