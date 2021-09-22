@extends('layouts.app')
@section('title', 'Securité')
@section('content')

    <section id="home" class="slider_area">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/sec.jpg') }}"
                        alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 data-animation="animated bounceInDown" style="color: #121212">Votre Sécurité, Notre
                                priorité.</h1>
                            <p data-animation="animated lightSpeedIn" style="color: #121212">Dans toute condition, Alarme
                                intrusion, Vidéo protection, Contrôle d’accès électronique <br>Bifm-Tech reste la
                                meilleure option.</p>
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
                            <h4 class="title">Options disponibles</h4>
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
                                            <p class="text" style="text-align: justify">Notre vocation est de vous accompagner
                                                dans la lutte contre le vol et le vandalisme. <br>Bifm-Tech vous proposes des solutions
                                                 completes d'alarme connectée pour votre local. L’installation d’un système d’alarme
                                                 vous permet de disuader les cambrioleurs d’entrer et  de réduire ainsi  les vols.
                                                Bénéficiez d’une protection 24 heures sur 24, d’un accès à distance et de la surveillance
                                                de votre entreprise où que vous soyez via la caméra.
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
                        <img src="{{ URL::asset('images/ga.jpg') }}" alt="about">
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
                        <h3 class="title">Nos offres</h3>
                        <p class="text"> Bifm-Tech vend et installe une large gamme de matériel de protection électronique
                            et vous garantit une fiabilité conforme aux normes.</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">

                <div class="row justify-content-center">
                    <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                        <div class="single-features mt-40" style="height: 312px">
                            <div class="features-title-icon d-flex justify-content-between">
                                <h4 class="features-title"><a href="/Securite/Alarme-intrusion">ALARME INTRUSION </a></h4>
                                <div class="features-icon">
                                </div>
                            </div>
                            <div class="features-content">
                                <p class="text">Les cambriolages et les vols font partie des délits les plus courants dans les
                                    milieux urbains et ruraux. Protégez votre entreprise, votre restaurant, votre maison ou votre Boutique.</p>
                                <a class="features-btn" href="/Securite/Alarme-intrusion">En savoir plus</a>
                            </div>
                        </div> <!-- single features -->
                    </div>
                    <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                        <div class="single-features mt-40" style="height: 312px">
                            <div class="features-title-icon d-flex justify-content-between">
                                <h4 class="features-title"><a href="/Securite/Alarme-incendie">ALARME INCENDIE</a></h4>
                                <div class="features-icon">

                                </div>
                            </div>
                            <div class="features-content">
                                <p class="text">Installation, mise en service, dépannage 7j/7 et
                                    maintenance de système de sécurité incendie (SSI) type 1-4.</p>
                                <a class="features-btn" href="/Securite/Alarme-incendie">En savoir plus</a>
                            </div>
                        </div> <!-- single features -->
                    </div>

                </div>
                <div class="row justify-content-center">

                    <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                        <div class="single-features mt-40" style="height: 312px">
                            <div class="features-title-icon d-flex justify-content-between">
                                <h4 class="features-title"><a href="/Securite/Video-surveillance">VIDEO PROTECTION</a></h4>

                            </div>
                            <div class="features-content">
                                <p class="text">Une surveillance locale ou à distance via
                                    application mobile ou logiciel avec enregistrement
                                    et stockage des images.</p>
                                <a class="features-btn" href="/Securite/Video-surveillance">En savoir plus</a>
                            </div>
                        </div> <!-- single features -->
                    </div>

                    <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                        <div class="single-features mt-40" style="height: 312px">
                            <div class="features-title-icon d-flex justify-content-between">
                                <h4 class="features-title"><a href="/Securite/Control-acces">CONTROLE D'ACCES</a></h4>
                                <div class="features-icon">

                                </div>
                            </div>
                            <div class="features-content">
                                <p class="text">Une gamme de produits à la pointe de la
                                    technologie vous permettant un contrôle total ou partiel des
                                    accès selon vos besoins.</p>
                                <a class="features-btn" href="/Securite/Control-acces">En savoir plus</a>
                            </div>
                        </div> <!-- single features -->
                    </div>

                    <!--<div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                        <div class="single-features mt-40" style="height: 312px">
                            <div class="features-title-icon d-flex justify-content-between">
                                <h4 class="features-title"><a href="/Securite/Cablage-reseau">CABLAGE RESEAU</a></h4>
                                <div class="features-icon">

                                </div>
                            </div>
                            <div class="features-content">
                                <p class="text">Réalisation de câblage informatique et
                                    télécom avec recette de vérification. Installation de baie
                                    de brassage et module.</p>
                                <a class="features-btn" href="/Securite/Cablage-reseau">En savoir plus</a>
                            </div>
                        </div> <!-- single features -->
                    <!--</div>

                    <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                        <div class="single-features mt-40" style="height: 312px">
                            <div class="features-title-icon d-flex justify-content-between">
                                <h4 class="features-title"><a>INSTALLATION ELECTRIQUE</a></h4>
                                <div class="features-icon">

                                </div>
                            </div>
                            <div class="features-content">
                                <p class="text">Nous avons le maximum d'expert pour vous permettre de réaliser une installation
                                    électrique durable pour votre maison où entreprise</p>
                            </div>
                        </div>
                    </div><!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    @include('layouts.ctc')
@endsection
