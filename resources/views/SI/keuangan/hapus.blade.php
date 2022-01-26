<!-- Modal Hapus -->
<div class="modal fade" id="modal-form-hapus" tabindex="-1" role="dialog" aria-labelledby="hapus" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-notification">Hapus Data Keuangan</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <i class="fa fa-exclamation ni-3x"></i>
                    <h4 class="heading mt-4">Apakah anda yakin untuk menghapus Keuangan ini?</h4>
                    <p>Menghapus data Keuangan akan menghapus semua yang berhubungan dengan Keuangan.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-white " data-dismiss="modal">Tutup</button>
                <a href="#" id="btn-hapus">
                    <button type="button" class="btn btn-white ml-auto">Hapus</button>
                </a>
            </div>
        </div>
    </div>
</div>

@push('tambahanScript')
<script>
  $(document).ready(function () {
    $("#tabel-form").on('click', '.hapus-data', function () {
        id = $(this).attr('id').split("-");
        document.getElementById("btn-hapus").href= "/SI/keuangan/" + id[2] + "/delete";
    });
});


</script>
@endpush
