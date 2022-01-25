<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        @yield('title', 'Tawalib Parabek')
    </title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="{{ url('assets/img/Logo/Logo2.png') }}" type="image/png"> -->
     <link rel="shortcut icon" href="{{ asset('/img/logo/Logo.svg') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
    type="text/css">
    <link rel="stylesheet" href="{{ url('assets/css/vendor/leaflet.css') }}" rel="text/css">
    <!-- Page plugins -->
    @stack('pagePlugins')
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/argon.css?v=1.1.0') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ url('assets/vendor/quill/dist/quill.core.css')}}">
    <link rel="stylesheet" href="{{ url('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/select2/dist/css/select2.min.css') }}">
    <style>
        .select2-selection__rendered {
            line-height: 31px !important;
        }
        .select2-container .select2-selection--single {
            height: 49px !important;
        }
        .select2-selection__arrow {
            height: 34px !important;
        }
    </style>
    @stack('tambahanCSS')
</head>

<body class="" style="background-image: url('/img/Login/log.png');background-size: cover;background-repeat: no-repeat;">
<div class="main-content">
<!-- Header -->
<div class="header py-9 py-lg-8 pt-lg-9">
    <!-- div class="container">
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
    </svg>
    </div> -->
</div>
<!-- Page content -->
<div class="container mt--8 pb-5">
    @if(session('error'))
     <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <span class="alert-inner--text">Username / password salah</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
    @endif
    <div class="row justify-content-center">
    <div class="col-lg-5 col-md-6">
        <div class="card border-0 mb-0" style="background-color: #e7e7fa">
        <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
            <h3>Form Login</h3>
            </div>
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input class="form-control" placeholder="Email" value="{{ old('email') }}" type="email" name="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input class="form-control" placeholder="Password" type="password" name="password">
                </div>
            </div>
            {{-- <div class="form-group">
                <p>Belum punya akun ??</p>
            </div> --}}

            <div class="text-center">
                <button type="submit" class="btn btn-block" style="color: white; background-color: #ec2c74">Sign in</button>
            </div>
            </form>
        </div>
        </div>
        <div class="row mt-3">
            <div class="copyright text-center text-xl-left ml-3" style="color: #ec2c74">
            &copy; 2022 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" style="color: #ec2c74" target="_blank">TIM TP</a>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<!-- Footer -->
<!-- Argon Scripts -->
<!--   Core   -->
@if(session('callback'))
<script>
    alert("{{ session('callback') }}");
</script>
@endif
<script src="{{url('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{url('assets/vendor/js-cookie/js.cookie.js') }}"></script>
<script src="{{url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
<!-- Optional JS -->
<script src="{{url('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{url('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{url('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{url('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{url('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{url('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{url('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{url('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<script src="{{url('assets/vendor/select2/dist/js/select2.min.js') }}"></script>
<script src="{{url('assets/vendor/quill/dist/quill.min.js') }}"></script>
@stack('tambahanJS')
<!-- Argon JS -->
<script src="{{url('assets/js/argon.js?v=1.1.0') }}"></script>
<script src="{{url('assets/js/custom.js?v=1.0.0') }}"></script>
<!-- After Argon JS -->
@stack('afterArgon')
</body>

</html>
