@extends('layouts.master')
@section('title', 'KP - Keuangan')

@section('pageContent')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ route('SI.dashboard') }}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('SI.dashboard') }}">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Keuangan</li>
                    </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
                </div>
            </div>
        <!-- Card stats -->
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <!-- Tabel Kategori -->
    @include('SI.keuangan.tabel')
</div>

 <!-- footer -->
    @include('SI.component.footer')

@endsection

@push('tambahanCSS')
    <link rel="stylesheet" href="{{ url('assets/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
@endpush

@push('tambahanJS')
    <script src="{{ url('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script>
        var data = <?php echo json_encode($data); ?>  ;
        data = data.data;
    </script>
@endpush
