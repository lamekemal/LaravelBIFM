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
                            <p data-animation="animated lightSpeedIn" style="color: #121212">Installlateur d'Alarme
                                incendie.</p>
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
                                            <p class="text" style="text-align: justify">Malheureusement en milieu urbain
                                                plus de 25000 sinistres sont déclarés par an avec plusieurs milliers de
                                                victimes d’incendie recensées.

                                                80 % environ ont eu lieu dans des habitations et les 20 % restants se
                                                répartissent entre les ERP (établissement recevant du public), les
                                                entrepôts, les bureaux, les locaux industriels…etc</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Un système de sécurité incendie doit permettre </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">

                                                La détection d’un incendie le plus tôt possible (par détection de fumée ou
                                                déclenchement manuel).

                                                La mise en sécurité des personnes : par la signalisation de l’existence d’un
                                                sinistre (signalisations sonores et lumineuses) et par l’évacuation des
                                                personnes (balisage des issues, ouverture des issues de secours…etc).

                                            </p>
                                        </div>
                                    </div>
                                </div>
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
                        <h3 class="title">Ce que nous somme : </h3>
                        <p class="text">Votre partenaire pour l'installation & la gestion de votre SSI Type 1 - 4 </p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 448px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a >Déclencheurs manuels (DM) </a></h4>
                            <div class="features-icon">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">

                                Déclencheur à membrane simple
                                Déclencheur avec indicateur mécanique d’état

                            </p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 448px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a >Détecteurs automatiques (DA)</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">

                                Détecteurs de fumée (optique / linéaire)
                                Détecteurs de flamme
                                Détecteurs de chaleur (thermostatiques / thermovélocimétriques)

                            </p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 448px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a >Equipement de contrôle des signalisations (ECS)</a></h4>

                        </div>
                        <div class="features-content">
                            <p class="text">

                                Analyseur d’information reçues des détecteurs (DA/DM)
                                Permet la localisation du lieu ou survient le sinistre
                                Permet la surveillance du fonctionnement du système
                                Emet une signalisation sonore et visuelle en fonction de l’état
                                Permet la mise en mémoire des informations relatives à son fonctionnement

                            </p>
                        </div>
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 363px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Centralisateur de mise en sécurité</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Constitue l’unité de gestion des alarmes (UGA) qui commande les diffuseurs
                                sonores
                                Constitue l’unité de commandes manuelles centralisé (UCMC) qui commande les DS et et les
                                dispositifs actionnés de sécurité (DAS)
                                Constitue l’unité de signalisation.</p>
                        </div>
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 363px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a  >Diffuseur sonores</a></h4>
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
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 363px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a >Dispositifs actionné de sécurité (DAS)</a></h4>
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
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

@endsection

@section('devis')
    @include('layouts.ctc')
@endsection
