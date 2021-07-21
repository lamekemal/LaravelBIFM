@extends('layouts.app')

@section('content')

<section id="home" class="slider_area">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/sec.jpg') }}" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 data-animation="animated bounceInDown" style = "color: #121212">Vidéosurveillance et contrôle d´accès.</h1>
                <p data-animation="animated lightSpeedIn" style = "color: #121212">Dans toute condition, Alarme intrusion, Vidéo protection, Contrôle d’accès électronique et domotique BifmTec reste la meilleure option.</p>
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
                        <h4 class="title">Vidéosurveillance et contrôle d´accès </h4>
                    </div> <!-- faq title -->
                    <div class="about-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Alarme intrusion</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">Face à la recrudescence du vol dans nos ville et contrées, l’importance d’un système d’alarme n’est  plus à démontrer. Surtout lorsqu'il s'agit de protéger des biens de valeur ou vos locaux professionnels, il est donc indispensable de se doter d’un système d'alarme efficace. BifmTec vous Propose des Solutions et des appareils adaptés à vos besoins.</p>
                                    </div>
                                </div> 
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Vidéo protection </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">La vidéosurveillance peut avoir un effet dissuasif ou vous permettre de visionner les vidéos enregistrées ultérieurement. Les domaines d'application de la vidéosurveillance sont les maisons individuelles, les bureaux, les magasins, les commerces et l'industrie. Il existe différents modèles, objectifs et fonctions pour chaque application. Nous vous apportons un conseil spécialisé et détaillé adapté à chacune de vos situations. </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="card">
                                <div class="card-header" id="headingTree">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Contrôle d’accès électronique</a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">Un contrôle d’accès vous permet de supprimer la gestion des clés. Vous pouvez ajouter, modifier et supprimer des droits d’accès à tout moment, et désactiver les badges perdus. C’est aussi un moyen efficace de filtrer et de gérer les entrées et sorties des individus afin de renforcer la sécurité et ainsi éviter tout risque d’intrusion. </p>
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
                    <p class="text"> Bifm Tech vend et installe une large gamme de matériel de protection électronique et vous garantit une fiabilité conforme aux normes.</p>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">ALARME INTRUSION </a></h4>
                        <div class="features-icon">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Protéger vos bien contre les voleurs grâce à nos 
                            systèmes anti-intrusiondernière génération 
                            certifiés NFA2P type 2 et 3..</p>
                        <a class="features-btn" href="#">En savoir plus</a>
                    </div>
                </div> <!-- single features -->
            </div>
            <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">ALARME INCENDIE</a></h4>
                        <div class="features-icon">

                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Installation, mise en service, dépannage 7j/7 et 
                            maintenance de système de sécurité incendie (SSI) type 1-4.</p>
                        <a class="features-btn" href="#">En savoir plus</a>
                    </div>
                </div> <!-- single features -->
            </div>
            <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">VIDEO PROTECTION</a></h4>

                    </div>
                    <div class="features-content">
                        <p class="text">Une surveillance locale ou à distance via 
                            application mobile ou logiciel avec enregistrement 
                            et stockage des images.</p>
                        <a class="features-btn" href="#">En savoir plus</a>
                    </div>
                </div> <!-- single features -->
            </div>

            <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">CONTROLE D'ACCES</a></h4>
                        <div class="features-icon">

                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Une gamme de produitsà la pointe de la 
                            technologie vous permettant un contrôlet otal ou partiel des 
                            accès selon vos besoins.</p>
                        <a class="features-btn" href="#">En savoir plus</a>
                    </div>
                </div> <!-- single features -->
            </div>

            <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">CABLAGE RESEAU</a></h4>
                        <div class="features-icon">

                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Réalisation de câblage informatique et 
                            télécom avec recette de vérification. Installation de baie 
                            de brassage et module.</p>
                        <a class="features-btn" href="#">En savoir plus</a>
                    </div>
                </div> <!-- single features -->
            </div>

            <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">INSTALLATION ELECTRIQUE</a></h4>
                        <div class="features-icon">

                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Nous avons le maximum d'expert pour vous permettre de réaliser une installation électrique durable pour votre maison où entreprise</p>
                    </div>
                </div> <!-- single features -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
@include('layouts.ctc')
@endsection