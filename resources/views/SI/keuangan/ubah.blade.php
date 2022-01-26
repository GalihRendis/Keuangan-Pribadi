<div class="modal fade" id="modal-form-ubah" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header text-center">
              <h3 class="modal-title text-right">Ubah Data Keuangan</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="update-form" method="post" action="{{ route('SI.keuangan-update') }}">
                  @csrf
                  <input name="id" id="id" type="hidden">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="update-nama">Nama Asal Uang Masuk</label>
                            <input class="form-control" type="text" name="asal_uang_masuk" id="asal_uang_masuk">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="update-nama">Jumlah Uang Masuk (RP.)</label>
                            <input class="form-control" type="number" name="uang_masuk" id="kip" value="0">
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
                document.getElementById('asal_uang_masuk').value = data[i].asal_uang_masuk;
                document.getElementById("kip").value = data[i].uang_masuk;
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
