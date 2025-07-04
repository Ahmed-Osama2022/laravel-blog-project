<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}

  <!-- Custom fonts for this template -->
  {{-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}

  <!-- Custom styles for this template -->
  {{-- <link href="css/clean-blog.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ asset('blog/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('blog/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('blog/css/clean-blog.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
              data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
              aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          @if (Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.index') }}">Admin</a>
            </li>
            {{-- Failed Method --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li> --}}

            {{-- 1- Method --}}
            {{-- <form action="/logout" method="post">
              @csrf
              <li class="nav-item">
                <button class="nav-link" type="submit">
                  Logout
                </button>
              </li>
            </form> --}}

            {{-- 2- Method --}}
            <li class="nav-item">
              <a class="nav-link text-danger" id='logout_btn' href="{{ route('logout') }}">Logout</a>
            </li>
            <script src="{{ asset('admin/js/logout.js') }}"></script>
          @else
            <li class="nav-item">
              <a class="nav-link border-info border-bottom" href="{{ route('login') }}">Login</a>
            </li>
          @endif


          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home.about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home.contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  {{-- <header class="masthead" style="background-image: url('img/home-bg.jpg')"> --}}
  {{-- @dd($mastHeadPhoto) --}}
  <header class="masthead" style="background-image: url({{ $mastHeadPhoto }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
            We are in {{ request()->route()->getName() }} Page
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @yield('content')
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer>

  {{-- <!-- Bootstrap core JavaScript --> --}}
  {{-- <script src="vendor/jquery/jquery.min.js"></script> --}}
  {{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  <script src="{{ asset('blog/js/jquery.min.js') }}"></script>
  <script src="{{ asset('blog/js/bootstrap.bundle.min.js') }}"></script>

  {{-- <!-- Custom scripts for this template --> --}}
  {{-- <script src="js/clean-blog.min.js"></script> --}}
  <script src="{{ asset('blog/js/clean-blog.min.js') }}"></script>

</body>

</html>
