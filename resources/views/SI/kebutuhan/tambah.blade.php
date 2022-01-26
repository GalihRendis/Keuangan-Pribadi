<div class="modal fade" id="modal-form-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header text-center">
              <h3 class="modal-title text-right">Tambah Kebutuhan Bulan Ini</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="create-form" method="post" action="{{ route('SI.kebutuhan-create') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="">Nama Barang</label>
                            <input class="form-control" type="text" name="nama_barang">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="update-nama">Harga Barang (RP.)</label>
                            <input class="form-control" type="number" name="harga">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="update-nama">Jumlah Barang</label>
                            <input class="form-control" type="number" name="jumlah">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary ml-auto" form="create-form">Tambah</button>
        </div>
    </div>
  </div>
</div>
