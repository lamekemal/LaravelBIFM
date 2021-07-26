@extends('layouts.app')

@section('content')

    <section id="home" class="slider_area">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/fmb.jpg') }}"
                        alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 data-animation="animated bounceInDown" style="color: #121212">Facility Management-FM</h1>
                            <p data-animation="animated lightSpeedIn" style="color: #121212">La Gestion des Installations ou
                                Facility Management (FM) est un service PRO de notre équipe technique pour toutes
                                prestations de services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content mt-45">
                        <div class="about-title">
                            <h6 class="sub-title">Informations</h6>
                            <h4 class="title">Facility Management-FM</h4>
                        </div> <!-- faq title -->
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">C'est quoi ?</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">Le Facility management qui veut dire
                                                Gestion des installations se définit comme l’ensemble des services et
                                                prestations liés a la bonne gestion opérationnelle et Stratégiques des
                                                entreprises. Dans les bâtiments, le confort de l'utilisateur et les
                                                exigences de l'opérateur ont la plus haute priorité. La disponibilité du
                                                système, l'efficacité énergétique et l'optimisation des coûts sont à la fois
                                                une exigence et une obligation pour nous. Face à ces enjeux Nous vous
                                                proposons des solutions intelligentes et des services innovants pour une
                                                gestion efficace et durable de vos bâtiments et espaces.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ URL::asset('images/bsm.jpg') }}" alt="about">
                    </div> <!-- faq image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="services" class="features-area">
        <div data-xanim="glideInUp" class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Nos offres</h3>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div data-xanim="glideInUp" class="col">
                    <div class="single-features mt-40" style="height:253px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a style="font-size: 29px; font-weight: bold;">Gestion technique du batiment </a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">
                                Maintenance et entretien <br />
                                Réparation <br />
                                Rénovation et réaménagement des espaces <br />
                                Gestion de l'énergie <br />
                            </p>
                        </div>
                    </div>
                </div>
                <div data-xanim="glideInUp" class="col">
                    <div class="single-features mt-40" style="height:253px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a style="font-size: 25px; font-weight: bold;">Services generaux et Gestion de l'environnement de travail</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">
                                Gestion de l'espace <br />
                                Seervice d'accueil <br />
                                Nettoyage <br />
                                Catering <br />
                                Sécurité <br />
                            </p>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('devis')
    @include('layouts.ctc')
@endsection
