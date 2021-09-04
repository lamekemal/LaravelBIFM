@extends('layouts.app')
@section('title', 'Domotique')
@section('content')
    <section id="home" class="slider_area">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/smrt.jpg') }}"
                        alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 data-animation="animated bounceInDown" style="color: #ffffff">Domotique</h1>
                            <p data-animation="animated lightSpeedIn" style="color: #ffffff">Augmenter le confort de votre maison et passé
                                au Smart home. Les maisons intelligentes c'est avec nous.</p>
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
                            <h6 class="sub-title">Automatisation</h6>
                            <h4 class="title">Domotique </h4>
                        </div> <!-- faq title -->
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">Smart Building</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">Les nouvelles technologie permettent de nos jours de centraliser
                                                la gestion de votre habitation ou local commercial grâce à
                                                des systèmes domotiques de plus en plus performants, offrant un
                                                contrôle personnalisé piloté par application compatible avec tablette et
                                                smartphone pour un confort unique. Ainsi vous pouvez d'un seul clic Contrôler
                                                des éclairages, fermez des volets, mettre en marche de votre alarme,
                                                visualisez vos biens, mise en route de l’arrosage automatique depuis
                                                votre domicile ou à distance. Notre équipe est à votre disposition
                                                pour vous guider dans le meilleur rapport qualité – prix de votre système
                                                domotique et vous garantit une intervention rapide et efficace.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ URL::asset('images/smh.jpg') }}" alt="about">
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
                        <h3 class="title">Gestion domotique</h3>
                        <p class="text">4 fonctions clés pour rendre son habitat ou entreprise autonome et
                            intelligent.!</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height:253px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Automatisme </a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">A chaque accès une solution. Bifm-Tec
                                vous conseille sur les meilleures solutions de
                                motorisations et équipements des portails et barrières automatique quelques
                                soit le type de
                                structure.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height:253px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Sécurité</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Protéger les biens et les personnes, anticiper, vous alerter et vous permettre
                                d’agir… La domotique est au service de votre sécurité et celle de votre maison</p>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height:253px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Confort</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Contrôler les objets connectés de la maison (alarme; ampoules, caméras fenêtres)
                                par smartphone, à la voix ou grâce à des accessoires.</p>
                        </div>
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height:253px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Energie</a></h4>
                            <div class="features-icon">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Réaliser des économies d'énergie, garder le contact avec votre maison ou vos
                                proches et gérez vos ambiances selon vos envies </p>

                        </div>
                    </div> <!-- single features -->
                </div>
            </div>
        </div> <!-- row -->
    </section>
@endsection

@section('devis')
    @include('layouts.ctc')
@endsection
