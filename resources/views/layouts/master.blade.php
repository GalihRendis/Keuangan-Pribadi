<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        @yield('title', 'BPM-Ina')
    </title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="{{ url('assets/img/Logo/Logo2.png') }}" type="image/png"> -->
    <link rel="shortcut icon" href="{{ asset('/img/logo/Logo1.png') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
    type="text/css">
    <!-- Page plugins -->
    @stack('pagePlugins')
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/argon.css?v=1.1.0') }}" type="text/css">

    <link rel="stylesheet" href="{{ url('assets/vendor/quill/dist/quill.core.css')}}">
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

        .bg-bpm {
            background: #fffcfc;
        }
    </style>
    @stack('tambahanCSS')
</head>

<body>
 <!-- Sidenav -->
 <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        @if(Auth::user()->role===1)
            <a class="navbar-brand" href="">
              <img src="{{ url('/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
        @else
            <a class="navbar-brand" href="">
              <img src="{{ url('/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
        @endif
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            @if(Auth::user()->role===1)
                @include('layouts.component.admin')
            @else
                @include('layouts.component.user')
            @endif
          </ul>
        </div>
      </div>
    </div>
  </nav>
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <!-- Search form -->
             <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                <div class="form-group mb-0">
                  <div class="input-group input-group-alternative input-group-merge">
                        <!-- <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text"> -->
                    </div>
                </div>
                <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
                <!-- Sidenav toggler -->
                <div class="ml-3 ml-md-0 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin"
                data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <div class="media align-items-center">
                <div
                class="icon icon-shape icon-sm bg-gradient-red text-white rounded-circle shadow mr-2 mr-lg-0">
                <i class="ni ni-single-02"></i>
            </div>
            <div class="media-body ml-2 d-none d-lg-block">
                <span
                class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
            </div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header noti-title">
            <h4 class="text-overflow m-0">Selamat Datang!</h4>
        </div>
                                <!-- <a href="" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>Profil Saya</span>
                                </a> -->
                                <div class="dropdown-divider"></div>
                                {{-- @if(Auth::user()->role === 1)
                                <a href="{{ route('super-admin.profile') }}" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>Change Profile</span>
                                </a>
                                @endif --}}
                                {{-- <a href="{{ url('/') }}" class="dropdown-item" target="_blank">
                                    <i class="ni ni-shop"></i>
                                    <span>Beranda</span>
                                </a> --}}
                                {{-- <a href="{{ url('/change-password') }}" class="dropdown-item">
                                    <i class="ni ni-key-25"></i>
                                    <span>Change Password</span>
                                </a> --}}
                                <form action="{{ route('logout') }}" method="get" id="logout-form">
                                    @csrf
                                </form>
                                <button type="submit" form="logout-form" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Keluar</span>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @section('pageContent')
        @show
    </div>
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
    @stack('tambahanScript')
    <!-- Argon JS -->
    <script src="{{url('assets/js/argon.js?v=1.1.0') }}"></script>
    <script src="{{url('assets/js/demo.min.js') }}"></script>
    <!-- After Argon JS -->
    @stack('afterArgon')
</body>

</html>
