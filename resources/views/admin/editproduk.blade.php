@extends('kerangka.adminmaster')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Tambah Produk</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.updateproduk', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Kode">Kode</label>
                        <input type="text" class="form-control" id="Kode" name="Kode" value="{{ $data->Kode }}">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $data->Nama }}">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" class="form-control" id="Harga" name="Harga" value="{{ $data->Harga }}">
                    </div>
                    @if ($data->Gambar)
                    <div class ="mb-2">
                        <img src="{{ url('Gambar'.'/'. $data->Gambar)}}" alt="" width="60px" class ="rounded-circle">
                    </div>

                    @endif
                    <div class = "mb-3 col-6">
                        <label for ="Gambar" class="form-label"></label>
                        <input type="file" class="form-control" name="Gambar">
                    </div>
                    <div class="form-group">
                        <label for="Stok">Stok</label>
                        <input type="text" class="form-control" id="Stok" name="Stok" value="{{ $data->Stok }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
