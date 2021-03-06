@extends('layouts.menu')
@section('title','BeraniWisata - Artikel')
@section('content')
<div class="container kumpulanartikel">
        <div class="row">
          <div class="col-md-8">
            {{-- <h1 class="my-4">Artikel
              <small>Secondary Text</small>
            </h1>--}}
            <!-- Blog Post -->
            <div class="card mb-4">
              <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Artikel 1</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="{{url('fokusartikel')}}" class="btn btn-primary">Selengkapnya &rarr;</a>
              </div>
              <div class="card-footer text-muted">
                Diposkan oleh 
              <a href="{{url('/')}}">Berani Wisata</a>
              </div>
            </div>
            <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                      <h2 class="card-title">Artikel 1</h2>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a href="{{url('fokusartikel')}}" class="btn btn-primary">Selengkapnya &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                      Diposkan oleh 
                    <a href="{{url('/')}}">Berani Wisata</a>
                    </div>
                  </div>
                  <div class="card mb-4">
                        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                        <div class="card-body">
                          <h2 class="card-title">Artikel 2</h2>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="{{url('fokusartikel')}}" class="btn btn-primary">Selengkapnya &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                          Diposkan oleh 
                        <a href="{{url('/')}}">Berani Wisata</a>
                        </div>
                      </div>
            </div>

            <div class="col-md-4">
                    <!-- Search Widget -->
                    {{-- <div class="card my-4">
                      <h5 class="card-header">Search</h5>
                      <div class="card-body">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                          </span>
                        </div>
                      </div>
                    </div> --}}
            
                    <!-- Categories Widget -->
                    <div class="card my-4">
                      <h5 class="card-header">Kategori</h5>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                              <li>
                              <a href="{{url('tiket')}}">Tips Trik</a>
                              </li>
                              <li>
                                <a href="{{url('tiket')}}">Pesawat</a>
                              </li>
                              <li>
                                <a href="{{url('tiket')}}">Tempat Wisata</a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                              <li>
                                <a href="{{url('tiket')}}">Domestik</a>
                              </li>
                              <li>
                                <a href="{{url('tiket')}}">Luar Negeri</a>
                              </li>
                              <li>
                                <a href="{{url('tiket')}}">Harga Tiket</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
            
                    <!-- Side Widget -->
                    {{-- <div class="card my-4">
                      <h5 class="card-header">Side Widget</h5>
                      <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                      </div>
                    </div> --}}
                </div>
            
    </div>
</div>
    
@endsection