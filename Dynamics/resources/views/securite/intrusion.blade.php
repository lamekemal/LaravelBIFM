@extends('layouts.app')

@section('content')
    <section id="home" class="slider_area">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img data-animation="animated zoomInUp" class="first-slide" src="assets/images/AI.jpg"
                        alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 data-animation="animated bounceInDown" style="color: #121212">Alarme intrusion</h1>
                            <p data-animation="animated lightSpeedIn" style="color: #121212">Intégrateur en Systèmes
                                d'alarme intrusion contre le vol.</p>
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
                            <h4 class="title"> L'insécurité est une réalité </h4>
                        </div> <!-- faq title -->
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">L'insécurité est une réalité</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">Notre vocation est de vous
                                                accompagner dans cette lutte contre le vol et le vandalisme.
                                                Malencontreusement d’autres choses douloureuses peuvent arriver : incendie,
                                                agression, inondation, malaise, ou panne électrique. Pour cela, tous nos
                                                systèmes d’alarmes sont conçus afin de répondre à tous ces types de danger à
                                                terme..</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">Une protection adaptée </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify"> Une protection adaptée D’une
                                                installation simple à la base, nous pouvons la faire évoluer vers une
                                                protection TOTALE selon vos besoins et votre budget. En vous adressant à
                                                nous, vous êtes certain de bénéficier des conseils de nos experts pour faire
                                                le choix d’un équipement parfaitement adapté à vos besoin. </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="assets/images/AIS.jpg" alt="about">
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
                        <h3 class="title">Protection contre le vol</h3>
                        <p class="text"> Système anti-intrusion filaire & sans fil certifiés NFA2P.</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Détecteur volumétrique</a></h4>
                            <div class="features-icon">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">
                                Détecteur infrarouge
                                Détecteur infrarouge vectoriel
                                Détecteur double technologie
                                Détecteur PIR CAM.
                            </p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Périmétriques / périphériques</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">

                                Contact d’ouverture de surface
                                Contact d’ouverture encastrable
                                Barrière infrarouge

                            </p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Détecteur de vibration</a></h4>

                        </div>
                        <div class="features-content">
                            <p class="text">

                                Vibration sur verre
                                Acoustique rupture de verre
                                Inertiel (choc avec réglage de sensibilité)
                                Sismique (bruit: perceuse, explosion…etc)

                            </p>
                        </div>
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Transmission</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">

                                Télésurveillance certifié APSAD
                                Transmission vocale
                                Transmission GSM / IP
                                Application mobile/ Tablette & Pc

                                .</p>
                        </div>
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Signalisation</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Signalisation

                                Sirène extérieur avec flash
                                Sirène intérieur 110 db
                                Générateur de brouillard (opaque – incapacitant)

                            </p>
                        </div>
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Autre détecteur</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">

                                Sonde d’innondation
                                Sonde de température
                                Détecteur de fumée

                            </p>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

@endsection

@section('devis')
    @include('layouts.ctc')
@endsection