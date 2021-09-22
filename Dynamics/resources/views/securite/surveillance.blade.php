@extends('layouts.app')
@section('title', 'Vidéo Surveillance')
@section('content')
    <section id="home" class="slider_area">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/VS.jpg') }}"
                        alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 data-animation="animated bounceInDown" style="color: #121212">Vidéosurveillance et contrôle
                                d´accès.</h1>
                            <p data-animation="animated lightSpeedIn" style="color: #121212; padding-bottom :22px">Ayez toujours un œil... </p>
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
                            <h4 class="title">Intégrateur en Systèmes de Vidéo-surveillance </h4>
                        </div> <!-- faq title -->
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">Pourquoi un système de vidéo protection</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">Les systèmes de vidéo-surveillance
                                                se sont démocratisés et sont désormais accessibles à tous.

                                                Au service de la meilleure gestion de vos locaux, que ce soit pour les
                                                professionnels (sensibilisation de votre personnel aux questions de
                                                sécurité, du risque, de déplacement, etc…) ou les particuliers (levée de
                                                doute après infraction, tentative d’intrusion, etc…).</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">Des solutions adaptées </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">Pour chacune des installations, nous
                                                trouvons toujours des solutions aux nouvelles technologies pouvant répondre
                                                précisément au type de risque.

                                                De l’analogique au HD-SD/CVI en passant par du IP, nous vous apportons un
                                                conseil spécialisé et détaillé adapté à chacune de vos situations. Vous
                                                trouverez ici tous nos systèmes de vidéosurveillance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ URL::asset('images/VSS.jpg') }}" alt="about">
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
                        <h3 class="title">BiFm-Tech</h3>
                        <p class="text"> Partenaire pour votre système de surveillance</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 375px"    >
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a> Caméras Starlight HD/IP</a></h4>
                            <div class="features-icon">
                            </div>
                        </div>
                        <div class="features-content">
                            <!--p class="text">

                                Caméra série PRO intérieur / extérieur 2.1-8MP
                                Éclairage StarLight de 3ª génération
                                Objectif motorisé et Smart IR de 100 mètres

                            </p-->
                        </div>
                        <img style="max-height: 200px ;  margin-bottom: 25px" src="{{ URL::asset('images/zen12.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 375px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Caméra bullet HD/IP</a></h4>
                            <div class="features-icon">
                            </div>
                        </div>
                        <div class="features-content">
                            <!--p class="text">

                                Caméra série PRO intérieur / extérieur 2.1 – 8 Mp
                                Eclairage Infrarouge
                                Zoom motorisé

                            </p-->
                        </div>
                        <img style="max-height: 200px ;  margin-bottom: 25px" src="{{ URL::asset('images/zen13.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 375px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Caméras dômes HD/IP</a></h4>

                        </div>
                        <div class="features-content">
                            <!--p class="text">

                                Dôme fixe ou motorisé
                                Degré de protection IP66
                                Résolution numérique: 1080P 2.4 – 8 Mp
                                .</p-->
                        </div>
                        <img style="max-height: 200px;  margin-bottom: 25px" src="{{ URL::asset('images/zen14.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 375px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Caméras BOX HD/IP</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <!--p class="text">

                                Caméra box HDCVI couleur jour/nuit
                                Filtre mécanique amovible
                                Résolution numérique: 1080P / 2 – 8 Mp

                            </p-->
                        </div>
                        <img style="max-height: 200px ; margin-bottom: 25px" src="{{ URL::asset('images/zen15.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 375px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Mini caméra cachée HD</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <!--p class="text">
                                Mini caméra couleur pour l’intérieur
                                Résolution numérique: 1080P / 2MP
                                Support de lyre orientable
                            </p-->
                        </div>
                        <img style="max-height: 200px ; margin-bottom: 25px" src="{{ URL::asset('images/zen16.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 375px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Enregistreur / stockeur vidéo</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <img style="max-height: 200px ;  margin-bottom: 25px" src="{{ URL::asset('images/zen17.png') }}" alt="capteurs">
                        <div class="features-content">
                            <!--p class="text">

                                DVR HD Tri-hybride, NVR IP
                                De 4 à 32 canaux analogique & numérique
                                Stockage 2 HDD SATA
                            </p-->
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
