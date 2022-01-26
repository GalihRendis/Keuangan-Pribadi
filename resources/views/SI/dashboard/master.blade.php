@extends('layouts.master')
@section('title', 'KP - Dashboard')

@section('pageContent')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                         <li class="breadcrumb-item"><a href=""><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboards</li>
                    </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
                </div>
            </div>
        <!-- Card stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Barang</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $data->total_data }}</span>
                    </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><?php echo date("F"); ?></span>
                    </p>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Uang Masuk</h5>
                        <span class="h2 font-weight-bold mb-0">Rp. {{ number_format($data->uang_masuk,0,',','.'); }}</span>
                    </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><?php echo date("F"); ?></span>
                    </p>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Uang Keluar</h5>
                        <span class="h2 font-weight-bold mb-0">Rp. {{ number_format($data->uang_keluar,0,',','.'); }}</span>
                    </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><?php echo date("F"); ?></span>
                    </p>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Uang Sisa</h5>
                        <span class="h2 font-weight-bold mb-0">Rp. {{ number_format($data->uang_sisa,0,',','.'); }}</span>
                    </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><?php echo date("F"); ?></span>
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    {{-- <h1>User</h1> --}}
    <!-- Tabel Kategori -->
</div>

 <!-- footer -->
    {{-- @include('BPM-Ina.component.footer') --}}

@endsection

@push('tambahanCSS')
    <link rel="stylesheet" href="{{ url('assets/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
@endpush

@push('tambahanJS')
    <script src="{{ url('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script type="text/javascript" src="{{ url('/assets/js/behaviour/Visualisasi/barchart_sorting.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/js/behaviour/Visualisasi/barchart_norotate.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/js/behaviour/Visualisasi/barchart4.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/js/behaviour/Visualisasi/stacked.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/js/behaviour/Visualisasi/scatter.js') }}"></script>
@endpush
