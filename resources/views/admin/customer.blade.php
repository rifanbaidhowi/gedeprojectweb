@extends('kerangka.adminmaster')
@section('content')

<section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Table Customer</h4>
                <a class="btn btn-primary" href="#">Tambah Customer</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $customer->Kode }}</td>
                                            <td>{{ $customer->Nama }}</td>
                                            <td>{{ $customer->NoHp }}</td>
                                            <td>{{ $customer->Alamat }}</td>
                                            <td>{{ $customer->JK }}</td>
                                            <td>{{ $customer->Tgl }}</td>

                                            <td><span class="badge bg-success">Active</span></td>
                                        </tr>

                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
