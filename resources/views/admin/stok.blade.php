@extends('kerangka.adminmaster')
@section('content')
<!-- Basic Tables start -->
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Table Stok</h4>
                        <a class="btn btn-primary" href="{{ route('admin.createstok') }}">Tambah Stok</a>
                    </div>
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      @elseif (session()->has('failed'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{session('failed')}}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>SKU</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($stoks as $stok)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $stok->nama }}</td>
                                            <td>{{ $stok->SKU }}</td>
                                            <td>{{ $stok->Jumlah }}</td>
                                            <td>{{ $stok->Keterangan }}</td>
                                            <td>
                                                <div class ="d-flex">
                                                <a class="btn btn-warning mx-1" href="{{ route('admin.editstok', ['id' => $stok->id]) }}">Update</a>
                                                <form action="{{ route('admin.destroystok', $stok->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger show_confirm" data-name="{{ $stok->nama }}">Delete</button>
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


