@extends('kerangka.adminmaster')

@section('content')
<!-- Basic Tables start -->
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Table Produk</h4>
                    <a class="btn btn-primary" href="{{ route('admin.createproduk') }}">Tambah Produk</a>
                </div>
                <div class="card-content">
                    <div class="card-body">

                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>dfsffs</td>
                                        <td>dfsffs</td>
                                        <td>
                                            <div class ="d-flex">
                                            <a class="btn btn-warning mx-1" href="#">Update</a>
                                            <a class="btn btn-danger mx-1" href="#">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Tables end -->
@endsection
