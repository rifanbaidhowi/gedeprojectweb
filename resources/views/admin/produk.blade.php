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
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        @foreach ($produks as $produk)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $produk->Kode }}</td>
                                            <td>{{ $produk->Nama }}</td>
                                            <td>{{ $produk->Harga }}</td>
                                            <td>
                                                @if ($produk->Gambar)
                                                <img style="max-width:50px; max-height:50px " src="{{url('Gambar').'/'.
                                                $produk->Gambar}}"/>

                                                @endif
                                            </td>

                                            <td>{{ $produk->Stok }}</td>
                                            <td>
                                                <div class ="d-flex">
                                                <a class="btn btn-secondary mx-1" href="#">Detail</a>
                                                <a class="btn btn-warning mx-1" href="{{ route('admin.editproduk', ['id' => $produk->id]) }}">Update</a>
                                                <form action="{{ route('admin.destroy', $produk->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger show_confirm" data-name="{{ $produk->nama }}">Delete</button>
                                                    </form>
                                                </div>
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
</section>
<!-- Basic Tables end -->

<!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Anda yakin ingin menghapus stok ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="cancel-btn" data-dismiss="modal">Batal</button>
            <button type="submit" id="delete-btn" class="btn btn-danger">Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function(){
  $('.show_confirm').click(function(event) {
    var form =  $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    $('#deleteModalLabel').html('Konfirmasi Hapus ' + name);
    $('#deleteModal').modal('show');
    $('#deleteModal').on('click', '#delete-btn', function(e) {
      form.submit();
    });
    $('#deleteModal').on('click', '#cancel-btn', function(e) {
      $('#deleteModal').modal('hide');
    });
  });
});
</script>

@endsection
