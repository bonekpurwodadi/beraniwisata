@extends('layouts.master')
@section('title','BeraniWisata - Beranda')
@section('content')
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center text-center">
      <div class="col-lg-10 align-self-end">
        <h1 class="text-bold" style="color:#ff9000;">Temukan Wisatamu</h1><br>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#">Di sini!</a>
      </div>
      <div class="col-lg-8 align-self-baseline">
        <!-- <p class="text-white-75 font-weight-light mb-5"></p> -->
      </div>
    </div>
  </div>
</header>

<!-- About-->
<section class="page-section bg-primary" id="about">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="text-white mt-0">Berani Wisata</h2>
        <p class="text-white mb-4">Kami adalah agen penjualan tiket pesawat domestik, internasional maupun promo yang mengedepankan kenyamanan konsumen</p>
        <a class="btn btn-dark btn-xl js-scroll-trigger" href="#portfolio">Ayo Berani Wisata !</a>
      </div>
    </div>
  </div>
</section>

<!--Legalitas-->
<section class="page-section" id="artikel">
  <div class="container">
    <hr class="divider my-4">
    <div class="row">
    
    </div>
  </div>
  </div>
</section>

<!--Artikel-->
<section class="page-section" id="artikel">
  <div class="container">
    <h2 class="text-center mt-0">Artikel</h2>
    <hr class="divider my-4">
    <div class="row">
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/artikel.jpg" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Artikel Pertama</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/artikel.jpg" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Artikel Kedua</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/artikel.jpg" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Artikel Ketiga</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section id="portfolio">
  <div class="container">
    <h2 class="text-center mt-0">Promo</h2>
    <hr class="divider my-4">
  </div>
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/promo1.png">
          <img class="img-fluid" src="img/portfolio/thumbnails/promo1.png" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Promo
            </div>
            <div class="project-name">
              Thailand
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/promo2.png">
          <img class="img-fluid" src="img/portfolio/thumbnails/promo2.png" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Promo
            </div>
            <div class="project-name">
              Singapura
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/promo3.png">
          <img class="img-fluid" src="img/portfolio/thumbnails/promo3.png" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Promo
            </div>
            <div class="project-name">
              Indonesia
            </div>
          </div>
        </a>
      </div>
      <!-- <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/promo3.png">
          <img class="img-fluid" src="img/portfolio/thumbnails/promo3.png" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Promo
            </div>
            <div class="project-name">
              Indonesia
            </div>
          </div>
        </a>
      </div> -->
    </div>
  </div>
</section>

<div style="height: 80px;background-color: #f8f9fa;">
  <h3 style="color:grey; text-align:center; padding:20px 0px;">Space for Ads</h3>
</div>

<!-- Contact Section -->
<section id="kontak">
  <div class="kontak_baru">
    <div class="row">
      <div class="col-sm">
        <h4 style="color:white; text-align:left;">BeraniWisata.com</h4>
        <h6 style="color:white; text-align:left;">Alamat</h6>
        <h6 style="color:white; text-align:left;">Nomor Telepon</h6>
        <h6 style="color:white; text-align:left;">Email</h6>
      </div>
      <div class="col-sm">
        <h4 style="color:white; text-align:left;">Link</h4>
        <a href="#" class="linkfooter"><h6 style="color:white; text-align:left;">Alamat</h6></a>
        <a href="#" class="linkfooter"><h6 style="color:white; text-align:left;">Nomor Telepon</h6></a>
        <a href="#" class="linkfooter"><h6 style="color:white; text-align:left;">Email</h6></a>
      </div>
      <div class="col-sm">
        <h4 style="color:white; text-align:left;">Maps</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63355.035059323425!2d110.42970823289401!3d-7.045704562550055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c2fca675267%3A0x6cf025f6beb40590!2sTembalang%2C+Semarang+City%2C+Central+Java!5e0!3m2!1sen!2sid!4v1559082378960!5m2!1sen!2sid" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen alt="maps"></iframe>
      </div>
      </div>
    </div>
  </div>
</section>
@endsection
