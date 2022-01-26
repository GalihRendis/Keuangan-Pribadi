
@if($success=session('success'))
@push('tambahanScript')
<script>
      var success = "{{ $success }}";
      swal({
          title: 'Success',
          text: success,
          type: 'success',
          buttonsStyling: false,
          confirmButtonClass: 'btn btn-success'
      })
  </script>
@endpush
@endif

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

<div class="card">
<!-- Card header -->
<div class="card-header border-0">
  <div class="row">
    <div class="col-6">
      <h3 class="mb-0">Tabel Kebutuhan</h3>
      <p>Jumlah Data : {{ $data->total() }}</p>
    </div>
    <div class="col-6 text-right">
      <a href="#" class="btn btn-sm btn-primary btn-round btn-icon"
        data-target="#modal-form-tambah" data-toggle="modal">
        <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
        <span class="btn-inner--text" data-toggle="tooltip" data-original-title="Add Data">Tambah</span>
      </a>
      <a href="#" class="btn btn-sm btn-success btn-round btn-icon"
        data-target="#modal-form-search" data-toggle="modal">
        <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
        <span class="btn-inner--text" data-toggle="tooltip" data-original-title="Search Data">Search</span>
      </a>
    </div>
  </div>
</div>
<!-- Light table -->
<div class="table-responsive">
  <table class="table align-items-center table-flush table-striped" id="tabel-form">
    <thead class="thead-light">
      <tr>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Created at</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
      <tr>
        <td class="table-user">
          {{ $d->nama_barang }}
        </td>
        <td class="table-user">
          Rp. {{ number_format($d->harga,0,',','.'); }}
        </td>
        <td class="table-user">
          {{ $d->jumlah }}
        </td>
        <td class="table-user">
            Rp. {{ number_format($d->total,0,',','.'); }}
          </td>
        <td>
          <span class="text-muted">{{ date('d-m-Y', strtotime($d->created_at)) }}</span>
        </td>
        <td class="table-actions">

          <a href="" class="table-action ubah-data" data-target="#modal-form-ubah" data-toggle="modal" id="ubah-data-{{ $d->id }}">
            <i class="fas fa-user-edit text-success" data-toggle="tooltip" data-original-title="Edit Data"></i>
          </a>
          <a href="" class="table-action table-action-delete hapus-data" id="hapus-data-{{ $d->id }}" data-target="#modal-form-hapus" data-toggle="modal">
            <i class="fas fa-trash text-danger" data-toggle="tooltip" data-original-title="Hapus Data"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>

<div class="d-flex">
  <div class="mx-auto">
      {{$data->links("pagination::bootstrap-4")}}
  </div>
</div>

<!-- Modal Tambah -->
@include('SI.kebutuhan.tambah')

<!-- Modal Ubah -->
@include('SI.kebutuhan.ubah')

<!-- Modal Hapus -->
@include('SI.kebutuhan.hapus')

<!-- Modal Search -->
@include('SI.kebutuhan.search')

