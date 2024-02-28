@extends('kerangka.adminmaster')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Tambah Stok</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{route('admin.update', ['id' => $data->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nama" name="nama" value="{{$data->nama}}" placeholder="Nama">
                                @error('nama')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>SKU</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="SKU" name="SKU" value="{{$data->SKU}}" placeholder="SKU">
                                @error('SKU')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Jumlah</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="Jumlah" name="Jumlah" value="{{$data->Jumlah}}" placeholder="Jumlah">
                                @error('Jumlah')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Keterangan</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <textarea id="Keterangan" name="Keterangan" placeholder="Keterangan">{{$data->Keterangan}}</textarea>
                                @error('Keterangan')
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
