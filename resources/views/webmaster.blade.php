<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>{{$template[0]->nama_desa}}</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.ico')}}" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsiveadmin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
     <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <style>

        .mainmenu-area {
            background-color: {{$template[0]->warna_navbar}};
        }

    </style>
</head>

<body data-spy="scroll" data-target="#primary-menu">



    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle butto" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}" class="navbar-brand logo">
                  <img id="logo" src="images/kabupaten-lombok-timur-ntb (1).png" alt="">
                    <h5><strong>Website Resmi Pemerintah</strong></h5>
                    <h2>{{$template[0]->nama_desa}}</h2>
                </a>
            </div>
            <!--Logo/-->
    <nav class="collapse navbar-collapse" id="primary-menu">
      <ul class="nav navbar-nav navbar-right">
        @guest
              <li>
                  <a href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
        @else
              <li class="nav-item dropdown">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->email }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
       </ul>
      </nav>
    </div>
    </div>
    <!--Mainmenu-area/-->



    <section id="statistik" style="margin-top: 31px;">
      <div class="container" id="app">
        <div class="row">
          <div class="col-md-12">
            <h5>Nama Desa : {{$template[0]->nama_desa}}</h5>
            <h5>Ukuran Font Nama Desa : {{$template[0]->font_size_nama_desa}} px</h5>
            <h5>Alamat Desa : {{$template[0]->alamat_desa}}</h5>
            <h5>Email Desa : {{$template[0]->email}}</h5>
            <h5>Nomor Telepon Desa : {{$template[0]->no_tlp_desa}}</h5>
            <h5>Background : <a href="{{$template[0]->background}}" target="_blank" title="">Lihat</a> </h5>
            <h5>Warna Navbar : <span style="background-color: {{$template[0]->warna_navbar}};">{{$template[0]->warna_navbar}}</span></h5>
            <br>
            <a href="{{url('formeditemplate/1')}}" title="">Edit</a>
          </div>
        </div>
      </div>
    </section>



    <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/wow.min.js') }}" type="text/javascript"></script>
</body>

</html>