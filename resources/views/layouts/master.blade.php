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
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
            <a class="nav-link js-scroll-trigger" href="#portfolio" style="font-size:20px;">Promo Terbaru</a>
          </li>
          <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{url('comingsoon')}}" style="font-size:20px;">Travel</a>
          </li>
          <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{url('kumpulanartikel')}}" style="font-size:20px;">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#kontak" style="font-size:20px;">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    @yield('content')

<section id="kontak">
      <div class="kontak_baru">
        <div class="row">
          <div class="col-sm">
            <h4 style="color:white; text-align:left;">BeraniWisata.com</h4>
            <h6 style="color:white; text-align:left;">Alamat</h6>
            <p style="color:white;">Perum Griya Tembalang Sejahtera Blok J No 8, Kota Semarang, Jawa Tengah</p>
            <h6 style="color:white; text-align:left;">Contact Person</h6>
            <i style="color:white;" class="fab fa-whatsapp"> 085727757208 (Evaldo)</i><br>
            <i style="color:white;" class="fab fa-whatsapp"> 082243491360 (Hestu)</i>
          </div>
          <div class="col-sm">
            <h4 style="color:white; text-align:left;">Link</h4>
            <a href="{{url('cekpromo')}}" class="linkfooter"><h6 style="color:white; text-align:left;">Promo Tiket</h6></a>
            <a href="{{url('kumpulanartikel')}}" class="linkfooter"><h6 style="color:white; text-align:left;">Artikel</h6></a>
          </div>
          <div class="col-sm">
            <h4 style="color:white; text-align:left;">Maps</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63355.035059323425!2d110.42970823289401!3d-7.045704562550055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c2fca675267%3A0x6cf025f6beb40590!2sTembalang%2C+Semarang+City%2C+Central+Java!5e0!3m2!1sen!2sid!4v1559082378960!5m2!1sen!2sid" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen alt="maps"></iframe>
          </div>
          </div>
        </div>
      </div>
</section>

<div class="fixed-bottom">
    <a href=""><img src="img/iconwa.png" alt="" style="width:60px;">
</div>

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
