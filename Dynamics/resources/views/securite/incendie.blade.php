@extends('layouts.app')
@section('title', 'Alarme incendie')
@section('content')
    <section id="home" class="slider_area">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/AIT.jpg') }}"
                        alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 data-animation="animated bounceInDown" style="color: #121212">Alarme incendie</h1>
                            <p data-animation="animated lightSpeedIn" style="color: #121212">Maintenance et installation.</p>
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
                            <h4 class="title">Alarme incendie</h4>
                        </div> <!-- faq title -->
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Pourquoi un système de sécurité incendie ?</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">Une alarme incendie est un système de sécurité
                                                qui est utilisé très souvent dans des Batiments et qui a pour but de détecter en amont
                                                un départ de feu (par détection de fumée ou déclenchement manuel) afin de mettre le
                                                plus rapidement possible en sécurité les personnes et les biens présents au sein
                                                du bâtiment. Dans ce genre de situation, le temps est précieux,
                                                et chaque seconde gagnée vous permet de réagir plus efficacement pour limiter
                                                les dégâts avant que le feu ne soit pleinement déclaré</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ URL::asset('images/AITS.jpg') }}" alt="about">
                    </div> <!-- faq image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== FEATRES TWO PART START ======-->
    <section id="services" class="features-area">
        <div data-xanim="glideInUp" class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">BiFm-Tech </h3>
                        <p class="text">Votre partenaire pour l'installation & la gestion de votre SSI Type 1-4 </p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 648px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a >Déclencheurs manuels (DM) </a></h4>
                            <div class="features-icon">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">

                                Déclencheur à membrane simple <br>
                                Déclencheur avec indicateur mécanique d’état

                            </p>
                        </div>
                        <img style="max-height: 250px ; position: absolute; bottom: 0;  margin-bottom: 25px" src="{{ URL::asset('images/zen6.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 648px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a >Détecteurs automatiques (DA)</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">

                                Détecteurs de fumée (optique / linéaire) <br>
                                Détecteurs de flamme <br>
                                Détecteurs de chaleur (thermostatiques / thermovélocimétriques)

                            </p>
                        </div>
                        <img style="max-height: 250px ; position: absolute; bottom: 0;  margin-bottom: 25px" src="{{ URL::asset('images/zen7.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 648px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a >Equipement de contrôle des signalisations (ECS)</a></h4>

                        </div>
                        <div class="features-content">
                            <p class="text">

                                Analyseur d’information reçues des détecteurs (DA/DM) <br>
                                Permet la localisation du lieu ou survient le sinistre<br>
                                Permet la surveillance du fonctionnement du système<br>
                                Emet une signalisation sonore et visuelle en fonction de l’état<br>
                                Permet la mise en mémoire des informations relatives à son fonctionnement

                            </p>
                        </div>
                        <img style="max-height: 200px ; position: absolute; bottom: 0;  margin-bottom: 25px" src="{{ URL::asset('images/zen8.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 563px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Centralisateur de mise en sécurité</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Constitue l’unité de gestion des alarmes (UGA) qui commande les diffuseurs
                                sonores
                                Constitue l’unité de commandes manuelles centralisée (UCMC) qui commande les DS et et les
                                dispositifs actionnés de sécurité (DAS)
                                Constitue l’unité de signalisation.</p>
                        </div>
                        <img style="max-height: 200px; position: absolute; bottom: 0;  margin-bottom: 25px" src="{{ URL::asset('images/zen9.png') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 563px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a  >Diffuseur sonore</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">

                                Avertisseurs sonores (sirènes)
                                Non autonomes (nécessite un circuit d’alimentation en énergie)
                                Autonomes ( BAAS: Bloc Autonome d’Alarme Sonore), alimenté en énergie et assuré par batterie
                                interne

                            </p>
                        </div>
                        <img style="max-height: 200px; position: absolute; bottom: 0;  margin-bottom: 25px" src="{{ URL::asset('images/zen10.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 563px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a >Dispositif actionné de sécurité (DAS)</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">

                                Commande des issues de secours
                                Commande des portes coupe-feu
                                Commande des exutoires de fumée
                                Commande de ventilation

                            </p>
                        </div>
                        <img style="max-height: 200px; position: absolute; bottom: 0; margin-bottom: 25px" src="{{ URL::asset('images/zen11.png') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

@endsection

@section('devis')
    @include('layouts.ctc')
@endsection
