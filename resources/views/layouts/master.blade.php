<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/css_bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/css_bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/css_bootstrap/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/css_bootstrap/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="css/css_bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/css_bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap2.min.css">
    <!-- <link rel="icon" type="image/png" href="img/logo.png"> -->
    <title>@yield('title')</title>
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{url('/')}}"><img src="img/logo.png" alt="" style="width:300px;"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about" style="font-size:20px;">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" style="font-size:20px;">Banyak Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" style="font-size:20px;">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#kontak" style="font-size:20px;">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    @yield('content')


  <footer class="bg-light footer_baru">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; Bootstrap</div>
    </div>
  </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/js_bootstrap/bootstrap.bundle.js"></script>
    <script src="js/js_bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/js_bootstrap/bootstrap.js"></script>
    <script src="js/js_bootstrap/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
  </body>
</html>
