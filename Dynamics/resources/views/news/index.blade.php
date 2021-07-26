@extends('layouts.app')

@section('content')

    <section id="home" class="slider_area">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/nws.jpg') }}"
                        alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 data-animation="animated bounceInDown" style="color: #fff">Actualités</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="about-area">

        @if (session()->has('message'))
            <div style="margin-top: 35px; margin: 25px">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info">
                        {{ session()->get('message') }}
                    </li>
                </ul>
            </div>
        @endif


        @if (Auth::check())
            <a href="/Actualite/create" class="btn btn-primary btn-lg text-uppercase"
                style="margin-top: 35px; margin:25px;">Ajouté une
                actualité</a>
        @endif


        @foreach ($posts as $post)

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-image mt-70">
                            <img src="{{ URL::asset('images/' . $post->image_path) }}" alt="about">
                        </div> <!-- faq image -->
                    </div>
                    <div class="col">
                        <div class="faq-content mt-55">
                            <h2>
                                {{ $post->title }}
                            </h2>
                            <span>
                                Par <span class="font-weight-bold font-italic"> {{ $post->user->name }} de BIFM Technology
                                </span>, ajouté le {{ date('j M Y', strtotime($post->updated_at)) }}
                            </span>
                            <p class="text-justify" style="font-size: 19px; margin-top: 15px">
                                {{ $post->description }}
                            </p>

                            <a href="/Actualite/{{ $post->slug }}" class="btn btn-primary btn-lg text-uppercase"
                                style="margin-top: 35px">Plus de
                                détails</a>
                            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                <span class="font-italic text-right float-right" style="margin: 5px">
                                    <a href="/Actualite/{{ $post->slug }}/edit" class="btn btn-outline-info">
                                        Modifier
                                    </a>
                                </span>
                                <span class="font-italic text-right float-right" style="margin: 5px">
                                    <form class="form-group" action="/Actualite/{{ $post->slug }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                    </form>
                                </span>
                            @endif
                        </div>


                    </div>
                </div>
            </div>

        @endforeach
    </section>
@endsection
