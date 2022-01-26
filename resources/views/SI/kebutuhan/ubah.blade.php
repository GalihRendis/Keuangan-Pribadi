<div class="modal fade" id="modal-form-ubah" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header text-center">
              <h3 class="modal-title text-right">Ubah Data Kebutuhan Bulan Ini</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="update-form" method="post" action="{{ route('SI.kebutuhan-update') }}">
                  @csrf
                  <input name="id" id="id" type="hidden">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="update-nama">Nama Barang</label>
                            <input class="form-control" type="text" name="nama_barang" id="nama_barang">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="update-nama">Harga Barang (RP.)</label>
                            <input class="form-control" type="number" name="harga" id="harga" value="0">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="update-nama">Jumlah</label>
                            <input class="form-control" type="number" name="jumlah" id="jumlah" value="0">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-success ml-auto" form="update-form">Ubah</button>
        </div>
    </div>
  </div>
</div>


@push('tambahanScript')
<script>
  $(document).ready(function () {
    //   console.log(data);
    $("#tabel-form").on('click', '.ubah-data', function () {
        id = $(this).attr('id').split("-");
        for(i = 0; i < data.length; i ++)
            if(data[i].id == id[2]) {
                document.getElementById('id').value = id[2];
                document.getElementById('nama_barang').value = data[i].nama_barang;
                document.getElementById('harga').value = data[i].harga;
                document.getElementById('jumlah').value = data[i].jumlah;
                break;
            }
    });
});

function daftarSelect(eid, text, value) {
    var x = document.getElementById(eid);
    var option = document.createElement("option");
    option.text = text;
    option.value = value;
    x.add(option);
}

function daftarSelected(eid, text, value) {
    var x = document.getElementById(eid);
    var option = document.createElement("option");
    option.text = text;
    option.value = value;
    option.selected = true;
    x.add(option);
}

function daftarSelectedDisabled(eid, text, value) {
    var x = document.getElementById(eid);
    var option = document.createElement("option");
    option.text = text;
    option.value = value;
    option.selected = true;
    option.disabled = true;
    x.add(option);
}

function emptySelectBoxById(eid) {
    document.getElementById(eid).innerHTML = "";
}


</script>
@endpush
