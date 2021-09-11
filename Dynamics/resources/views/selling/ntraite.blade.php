@extends('layouts.app')
@section('title', 'Article Bi-Shop non traité')
@section('content')
    <section id="about" class="about-area" style="margin-top: 125px">

        @if (session()->has('message'))
            <div style="margin-top: -5px; margin: -5px">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info">
                        {{ session()->get('message') }}
                    </li>
                </ul>
            </div>
        @endif

        <div data-xanim="glideInUp" class="container">

            @foreach ($sellings as $product)
                <div class="card" style="margin-top: 5px; margin-bottom : 20px">
                    <div class="card-header">

                        <form class="form-group" action="/Selling/{{ $product->slug }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="text" value="1"
                                style="max-height: 0px; max-width: 0px;padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;"
                                name="status" class="form-control invisible">
                            <button type="submit" class="btn btn-outline-success float-right"
                                style="margin-right: 8px">Message traité</button>
                        </form>
                        Article ajouté le {{ date('j M Y', strtotime($product->updated_at)) }}
                    </div>
                    <div class="card-body">
                        <div class="row" style="margin-top: -35px">
                            <div class="col-lg-5">
                                <div class="faq-content mt-45">
                                    <div class="about-accordion">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true"
                                                        aria-controls="collapseOne">{{ $product->title }}
                                                    </a>
                                                </div>

                                                <p class="text-justify" style="font-size: 12px; margin-top: 5px">
                                                    Description: {{ $product->description }}
                                                </p>

                                                <p class="text-justify" style="font-size: 12px; margin-top: 5px">
                                                    Prix : {{ $product->price }}
                                                </p>
                                                <ul class="list-group" style="margin-top: 8px">
                                                    <li class="list-group-item active">Informations du client</li>
                                                    <li class="list-group-item">Nom : {{ $product->name }} </li>
                                                    <li class="list-group-item">Email: {{ $product->email }}</li>
                                                    <li class="list-group-item">Contact: {{ $product->contact }}</li>
                                                </ul>
                                            </div>
                                            </form>
                                        </div>
                                    </div> <!-- faq accordion -->
                                </div> <!-- faq content -->
                            </div>
                            <div class="col-lg-7">
                                <div class="about-image mt-50">
                                    <img src="{{ URL::asset('images/' . $product->image_path) }}" alt="about">
                                </div> <!-- faq image -->
                            </div>
                        </div> <!-- row -->
                    </div>
                </div>
            @endforeach
        </div> <!-- container -->
    </section>
@endsection
