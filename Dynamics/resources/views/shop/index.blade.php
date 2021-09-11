@extends('layouts.app')
@section('title', 'Bi-Shop')
@section('content')

    <section id="home" class="slider_area">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/shp.jpg') }}"
                        alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 data-animation="animated bounceInDown" style="color: #fff">Bi-Shop</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Catégories des articles disponibles</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/BiShop">Toutes Catégories</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="/BiShop-Electricite">Electricite</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/BiShop-Climatisation">Climatisation</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/BiShop-Securite">Securite</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/BiShop-Domotique">Domotique</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
          </form>
        </div>
      </nav>
    <section id="services" class="bishop-area">

        @if (session()->has('message'))
            <div style="margin-top: 5px; margin: 5px">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info">
                        {{ session()->get('message') }}
                    </li>
                </ul>
            </div>
        @endif


        @if (Auth::check())
            <a href="/BiShop/create" class="btn btn-primary btn-lg text-uppercase"
                style="margin-top: 5px; margin:5px;">Ajouter un produit</a>
        @endif

        <div data-xanim="glideInUp" class="container">
            <!--div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">



                    </div>
                </div>
            </div-->
            <div class="row justify-content-center">

                @foreach ($products as $product)
                    <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9" style="margin-top: -5px">
                        <div class="single-features mt-40">
                            <div class="features-title-icon d-flex justify-content-between">
                                <h4 class="features-title"><a>
                                        {{ $product->title }} </a></h4>
                                <div class="features-icon">

                                </div>
                            </div>
                            <div class="features-content">
                                <p class="text">{{ $product->description }}</p>

                                <img style="max-height: 150px;" src="{{ URL::asset('images/' . $product->image_path) }}" style="margin-top: 5px">

                                <input class="form-control" type="text" value="Prix :  {{ $product->price }}" style="margin-top: 5px" readonly>

                                <a href="/BiShop/{{ $product->slug }}" class="btn btn-primary btn-lg text-uppercase"
                                    style="margin-top: 25px"> Faire une commande
                                </a>

                                @if (isset(Auth::user()->id) && Auth::user()->id == $product->user_id)
                                    <span class="font-italic text-right float-center" style="margin: 5px">
                                        <form class="form-group" action="/BiShop/{{ $product->slug }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                        </form>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
@endsection
