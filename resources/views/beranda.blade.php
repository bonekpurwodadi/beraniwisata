@extends('layouts.master')
@section('title','BeraniWisata - Beranda')
@section('content')

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center text-center">
      <div class="col-lg-10 align-self-end">
        <h1 class="text-bold" style="color:#ff9000;">Temukan Wisatamu</h1><br>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{url('comingsoon')}}">Di sini!</a>
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
      <a class="btn btn-dark btn-xl js-scroll-trigger" href="{{url('cekpromo')}}">Promo Lainnya</a>
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
          <a href="{{url('artikel')}}">Artikel Pertama</a>
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
            <a href="{{url('artikel')}}">Artikel Kedua</a>
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
            <a href="{{url('artikel')}}">Artikel Ketiga</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- Services Section -->
<section class="page-section" id="services">
  <div class="container">
    {{-- <h2 class="text-center mt-0">At Your Service</h2>
    <hr class="divider my-4"> --}}
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-plane text-primary mb-4"></i>
          <h3 class="h4 mb-2">Tiket Pesawat Promo</h3>
          <p class="text-muted mb-0">Dengan menggunakan Berani Wisata, Anda selalu mendapatkan tiket pesawat 
            promo yang ditawarkan oleh berbagai maskapai penerbangan karena Berani Wisata membandingkan 
            dan memberikan harga tiket pesawat termurah untuk masyarakat Indonesia.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-dollar-sign text-primary mb-4"></i>
          <h3 class="h4 mb-2">Pembayaran Aman</h3>
          <p class="text-muted mb-0">Kami adalah agen penjualan tiket pesawat yang mengedepankan kepuasan
            dan loyalitas tinggi bagi customer, sehingga kami dapat dipercaya.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-hourglass text-primary mb-4"></i>
          <h3 class="h4 mb-2">Up to Date</h3>
          <p class="text-muted mb-0">Selalu terupdate dengan berita travel, tiket pesawat promo, 
            bacaan travel inspirasional, petunjuk aplikasi visa dan paspor, 
            dan tips perjalanan yang terbaru dan berguna!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-heart text-primary mb-4"></i>
          <h3 class="h4 mb-2">Kenapa pakai Berani Wisata</h3>
          <p class="text-muted mb-0">Berani Wisata membandingkan semua maskapai penerbangan seperti Lion Air, 
            Garuda Indonesia, Citilink, AirAsia, dll, sehingga 
            Anda selalu mendapatkan harga tiket pesawat termurah.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- <section class="page-section bg-secondary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <p class="text-white mb-4">Kami adalah agen penjualan tiket pesawat domestik, internasional maupun promo yang mengedepankan kenyamanan konsumen</p>
        <a class="btn btn-dark btn-xl js-scroll-trigger" href="{{url('cekpromo')}}">Promo Lainnya</a>
        </div>
      </div>
    </div>
  </section> --}}

<br><br><br>
<section id="portfolio">
  <div class="container">
    <h2 class="text-center mt-0">Promo Terbaru</h2>
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
    </div>
  </div>
</section>

{{-- <div style="height: 80px;background-color: #f8f9fa;">
  <h3 style="color:grey; text-align:center; padding:20px 0px;">Space for Ads</h3>
</div> --}}
@endsection
