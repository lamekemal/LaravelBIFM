@extends('layouts.app')
@section('title', 'Devis et messages clients traités')
@section('content')
<section id="about" class="about-area" style="margin-top: 125px">

    @if (session()->has('message'))
        <div style="margin-top: 35px; margin: 25px">
            <ul class="list-group">
                <li class="list-group-item list-group-item-info">
                    {{ session()->get('message') }}
                </li>
            </ul>
        </div>
    @endif

    <div data-xanim="glideInUp" class="container">

        @foreach ($devis as $product)
            <div class="card" style="margin-top: 5px; margin-bottom : 20px">
                <div class="card-header">
                    <form class="form-group" action="/Devis/{{ $product->slug }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="text" value="0"
                            style="max-height: 0px; max-width: 0px;padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;"
                            name="status" class="form-control invisible">
                        <button type="submit" class="btn btn-outline-warning float-right"
                            style="margin-right: 8px">Message non traité</button>
                    </form>
                    Article ajouté le {{ date('j M Y', strtotime($product->updated_at)) }}
                </div>
                <div class="card-body">
                    <div class="row" style="margin-top: -35px">
                        <div class="col-lg-5">
                            <div class="faq-content mt-45">
                                <div class="about-accordion">
                                    <div class="accordion" id="accordionExample">
                                        <ul class="list-group" style="margin-top: 2px">
                                        <li class="list-group-item active">Categorie : {{ $product->category }}</li>
                                        <li class="list-group-item">Nom : {{ $product->name }} </li>
                                        <li class="list-group-item">Email: {{ $product->email }}</li>
                                        <li class="list-group-item list-group-item-warning">Message ou Contact téléphonique:</li>
                                        <li class="list-group-item">{{ $product->contact }}</li>
                                    </ul>

                                    </div>
                                </div> <!-- faq accordion -->
                            </div> <!-- faq content -->
                        </div>
                        <div class="col-lg-7">
                            <div class="about-image mt-50">
                                <img src="{{ URL::asset('images/msg.png') }}" alt="about">
                            </div> <!-- faq image -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div>
        @endforeach
    </div> <!-- container -->


</section>
@endsection
