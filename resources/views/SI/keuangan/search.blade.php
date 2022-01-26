<div class="modal fade" id="modal-form-search" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header text-center">
              <h3 class="modal-title text-right">Search Keuangan</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="search-form" method="GET" action="{{ route('SI.keuangan-search') }}">
                  {{-- @csrf --}}
                  {{-- <input name="id" id="id" type="hidden"> --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="update-nama">Bulan Keuangan</label>
                            <select class="form-control" data-toggle="select" name="bulan" id="">
                                <option value="" selected="">All</option>
                                <?php $i=1; ?>
                                @foreach($bulan as $k)
                                <option value="{{ $i++ }}">{{ $k }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-success ml-auto" form="search-form">Search</button>
        </div>
    </div>
  </div>
</div>
