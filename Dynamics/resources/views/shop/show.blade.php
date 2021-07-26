@extends('layouts.app')

@section('content')

    <section id="about" class="about-area">
        <div data-xanim="glideInUp" class="container" style="margin-top: 125px">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content mt-45">
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <form class="form-group" action="/Selling" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <a href="#" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">Confirmer votre commande
                                                :</a>
                                        </div>

                                        <h3 style="margin-top: 20px">
                                            {{ $product->title }}
                                        </h3>

                                        <p class="text-justify" style="font-size: 19px; margin-top: 5px">
                                            Description: {{ $product->description }}
                                        </p>

                                        <input class="form-control" type="text"
                                            value="Faire une demande d'achat au prêt d'un commercial"
                                            style="margin-top: 15px" readonly>

                                        <input type="text" name="name" placeholder="Nom" class="form-control"
                                            style="margin-top:15px">

                                        <input type="text" name="email" placeholder="E-Mail" class="form-control"
                                            style="margin-top: 15px">

                                        <input type="text" name="contact" placeholder="Telephone Ex: 00225 0000000000"
                                            class="form-control" style="margin-top: 15px">

                                        <button style="margin-top:25px;" type="submit" class="btn btn-outline-primary">Faire
                                            une commande</button>

                                        <input class="form-control invisible" type="text" name="slug"
                                        value="{{$product->slug }}" readonly>

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
        </div> <!-- container -->
    </section>
@endsection
