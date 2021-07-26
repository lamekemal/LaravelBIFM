@extends('layouts.app')

@section('preloader')
<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('content')

    <!--====== font-family: 'Poppins',sans-serif; SLIDER PART START ======-->
    <section id="home" class="slider_area">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" data-animation="animated fadeIn" src="{{ URL::asset('images\slider\0.jpg') }}" alt="First slide">
                <div class="container">
                  <div data-animation="animated fadeIn" class="carousel-caption text-center" style="margin-bottom: 155px; background-color: #ffffff75;">
                    <h1 data-animation="animated bounceInRight" style = "color: #121212">Confort à domicile.</h1>
                    <p data-animation="animated flipInX"  style = "color: #121212">ELECTRIQUE - CLIMATIQUE - ALARMES & SURVEILLANCE</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img data-animation="animated fadeIn" class="second-slide" data-delay="1000" data-dur="1000" src="{{ URL::asset('images\slider\B.jpg') }}" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1 data-animation="animated bounceInRight" style = "color: #fff" >Electricité.</h1>
                    <p data-animation="animated flipInX" style = "color: #fff" >Expert en Électricité Générale et installation de grande échelle.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="margin-bottom: 155px;">
                <img  data-animation="animated fadeIn" class="third-slide" src="{{ URL::asset('images\slider\C.jpg') }}" alt="Third slide">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1 data-animation="animated fadeIn" style = "color: #121212">Sécurité</h1>
                    <p data-animation="animated bounceInRight" style = "color: #121212">► Alarme intrusion</p>
                    <p data-animation="animated bounceInRight" style = "color: #121212">► Alarme incendie</p>
                    <p data-animation="animated bounceInRight" style = "color: #121212">► Video surveillance</p>
                    <p data-animation="animated bounceInRight" style = "color: #121212">► Controle d'acces</p>
                    <p data-animation="animated bounceInRight" style = "color: #121212">► Domotique</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <img class="first-slide" data-animation="animated fadeIn" src="{{ URL::asset('images\slider\A.jpg') }}" alt="First slide">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1 data-animation="animated bounceInRight" style = "color: #121212">Climatisation</h1>
                    <p data-animation="animated flipInX"  style = "color: #121212">Tout type de climatiseur, le froid à porté de main.</p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

    </section>
    <!--====== SLIDER PART ENDS ======-->
    <!--====== ABOUT PART START ======-->
    <section  id="about" class="about-area">
        <div data-xanim="glideInUp" class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content mt-45">
                        <div class="about-title">
                            <h6 class="sub-title">Informations</h6>
                            <h4  data-anim="glideInRight" class="title">A propos de nous</h4>
                        </div> <!-- faq title -->
                        <div  class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Qui sommes nous ?</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">BifmTec est une Entreprise spécialisée dans l’électricité générale, la climatisation, la vidéosurveillance et le contrôle d´accès. Elle offre des services de gestion pour des biens immobiliers de tous types d'utilisation pemettant ainsi de sécuriser et d'augmenter la valeur potentielle de ces derniers.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Notre vision ?</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">BifmTec a pour objectif de répondre aux enjeux de développement durable dans le secteur du bâtiment en proposant des solutions durables et des prestations de qualité grâce à son esprit d’écoute, son excellente compréhension des besoins des clients, l’engagement constant et le savoir-faire de son équipe constituée de Techniciens compétents et experts du bâtiment. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ URL::asset('images/about.jpg') }}" alt="about">
                    </div> <!-- faq image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== ABOUT PART ENDS ======-->
    <!--====== FEATRES TWO PART START ======-->
    <section id="services" class="features-area">
        <div data-xanim="glideInUp" class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Nos services</h3>
                        <p class="text">Professionnel ou particulier, pour une habitation individuelle, ou un local commercial. BifmTec c’est l’assurance d’être bien accompagné tout au long de son projet de l’étude à la réalisation!</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 351px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="/Electricite">Electricité générale </a></h4>
                            <div class="features-icon">
                                <i class="lni lni-bolt"></i>
                                <img class="shape" src="{{ URL::asset('images/f-shape-1.svg') }}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Nous sommes la référence  pour l' Installation et rénovation électrique et les Dépannages Electriques.</p>
                            <a class="features-btn" href="/Electricite">En savoir plus</a>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 351px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="/Climatisation">Climatisation</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-apartment"></i>
                                <img class="shape" src="{{ URL::asset('images/f-shape-1.svg') }}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Pour toute installation Système de climatisation, Building Infrastructure Technology (BifmTec) vous accompagne.</p>
                            <a class="features-btn" href="/Climatisation">En savoir plus</a>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 351px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="/Securite">Sécurité</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-protection"></i>
                                <img class="shape" src="{{ URL::asset('images/f-shape-1.svg') }}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Vidéosurveillance et contrôle d´accès, BifmTec dispose des outils moderne (Alarme intrusion, Vidéo protection, Domotique etc.) pour la protection de vos bien.</p>
                            <a class="features-btn" href="/Securite">En savoir plus</a>
                        </div>
                    </div> <!-- single features -->
                </div>

                <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 351px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="/Domotique">Domotique</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-home"></i>
                                <img class="shape" src="{{ URL::asset('images/f-shape-1.svg') }}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">La domotique est l'ensemble des techniques de l'électronique, de physique du bâtiment, d'automatisme, de l'informatique et des télécommunications utilisées dans les bâtiments  .</p>
                            <a class="features-btn" href="/Domotique">En savoir plus</a>
                        </div>
                    </div> <!-- single features -->
                </div>

                <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 351px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="/FacilityManagement">Facility management</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-handshake"></i>
                                <img class="shape" src="{{ URL::asset('images/f-shape-1.svg') }}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Le Facility management qui veut dire Gestion des installations se définit comme l’ensemble des services et prestations liés a la bonne gestion opérationnelle et Stratégiques des entreprises.</p>
                            <a class="features-btn" href="/FacilityManagement">En savoir plus</a>
                        </div>
                    </div> <!-- single features -->
                </div>

                <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 351px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="/BiShop">BI Shop</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-shopping-basket"></i>
                                <img class="shape" src="{{ URL::asset('images/f-shape-1.svg') }}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Market place de produit divers distribuer par BiFm Tech.</p>
                            <a class="features-btn" href="/BiShop">En savoir plus</a>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== FEATRES TWO PART ENDS ======-->

    <!--====== PORTFOLIO PART START ======-->
    <section id="portfolio" class="portfolio-area portfolio-four pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Galerie d'image</h3>
                        <p class="text">Decouvrez notre galerie d'image afin de vous donnée une idée de notre savoir faire</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="portfolio-menu text-center mt-50">
                        <ul>
                            <li data-filter="*" class="active">Toutes les images</li>
                            <li data-filter=".branding-4">Electricite</li>
                            <li data-filter=".marketing-4">Climatisation</li>
                            <li data-filter=".planning-4">Securite</li>
                            <!--li data-filter=".research-4">RESEARCH</li-->
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row no-gutters grid mt-50">
                        <div class="col-lg-4 col-sm-6 branding-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ URL::asset('images/portfolio/1.png') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ URL::asset('images/portfolio/1.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ URL::asset('images/portfolio/shape.svg') }}" alt="shape" class="shape">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 branding-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ URL::asset('images/portfolio/2.png') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ URL::asset('images/portfolio/2.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ URL::asset('images/portfolio/shape.svg') }}" alt="shape" class="shape">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 branding-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ URL::asset('images/portfolio/3.png') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ URL::asset('images/portfolio/3.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ URL::asset('images/portfolio/shape.svg') }}" alt="shape" class="shape">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ URL::asset('images/portfolio/4.png') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ URL::asset('images/portfolio/4.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ URL::asset('images/portfolio/shape.svg') }}" alt="shape" class="shape">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ URL::asset('images/portfolio/5.png') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ URL::asset('images/portfolio/5.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ URL::asset('images/portfolio/shape.svg') }}" alt="shape" class="shape">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ URL::asset('images/portfolio/6.png') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ URL::asset('images/portfolio/6.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ URL::asset('images/portfolio/shape.svg') }}" alt="shape" class="shape">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ URL::asset('images/portfolio/7.png') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ URL::asset('images/portfolio/7.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ URL::asset('images/portfolio/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ URL::asset('images/portfolio/8.png') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ URL::asset('images/portfolio/8.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ URL::asset('images/portfolio/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ URL::asset('images/portfolio/9.png') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ URL::asset('images/portfolio/9.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ URL::asset('images/portfolio/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="servicxes" style="background-color: #082b53">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title" style="color: #fff; margin-top: 45px">Actualités du blog</h3>
                        <h6 class="text" style="color: #fff" >Dernières actus :
                        Alarme, Vidéo-surveillance, Electricité, Climatisation & Domotique <br>
                        Profitez de toute notre actualité sur nos produits électriques, de climatisations,
                         des différents systèmes d’alarme intrusion, incendie, contrôle d’accès,
                         vidéo-surveillance HD / IP et domotique.</h6>
                         <br>
                         <button type="button" style="margin-top: 5px; margin-top: 25px;" class="btn btn-outline-light">Le Blog</button>
                         <br>

                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="servicjes">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Pourquoi nous?</h3>
                        <p class="text">Il serait long et fastidieux de présenter la liste exhaustive de nos clients. Mais de manière succincte,  </p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->

    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <div class="counter-value number-count" data-count="135">135</div>
                            <p class="counter-info">Projets réalisés</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="127">127</div>
                            <p class="counter-info">Clients satisfait</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="93">93</div>
                            <p class="counter-info">Retour positif</p>
                        </div>

                    </div>
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->

    <!-- end of statistics -->
        </div> <!-- container -->
    </section>
    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial-left-content mt-45">
                        <h6 class="sub-title">ACCOMPAGNEMENT</h6>
                        <h4 class="title">NOUS VOUS ACCOMPAGNONS <br>DANS TOUS VOS PROJETS</h4>
                        <ul class="testimonial-line">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <p class="text">Professionnel ou particulier, pour une habitation individuelle, ou un local commercial. Bifm Tech c’est l’assurance d’être bien accompagné tout au long de son projet de l’étude à la réalisation.</p>
                    </div> <!-- testimonial left content -->
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-right-content mt-50">
                        <div class="quota">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="testimonial-content-wrapper testimonial-active">
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">Bifm Tech apporte des solutions à la pointe de la technologie dans le domaine de l’électricité, de climatisation, systèmes d’alarme et domotique. Entre écoute et conseil, Bifm Tech saura vous accompagner de l’étude à la réalisation de vos projets.</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-name media-body">
                                            <h5 class="name">Solution</h5>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">Professionnels exigeants et compétents, nous sommes prêts à relever tous les défis afin de vous offrir des prestations de qualité sur votre habitation individuelle, immeuble collectif, entreprise et établissement recevant du public (ERP).</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-name media-body">
                                            <h5 class="name">Services</h5>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">Bifm Tech est une entreprise responsable: notre volonté d’utiliser des matériaux toujours plus innovants vous garantit une technologie à la pointe du progrès en matière énergétique et protection de l’environnement. Nos techniques de travail vous assurent la sécurité et la qualité de nos engagements.</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-name media-body">
                                            <h5 class="name">Engagements</h5>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial content wrapper -->
                    </div> <!-- testimonial right content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== TEAM START ======-->

        <section id="team" class="team-area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">SERVICE CLIENT PLUS</h3>
                        <span class="sub-title" style="color: #fff">.............................</span>
                        <br/>
                        <br/>
                        <br/>
                        <span class="sub-title" style="color: #fff">.............................</span>
                    </div>
                </div>
            </div>

                <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Un service sur-mesure</a></h4>
                            <span class="sub-title">personnalisé à vos besoins</span>
                        </div>
                    </div>
                  </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Respect du planning</a></h4>
                            <span class="sub-title">et des engagements</span>
                        </div>
                    </div>
                    </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">SAV performant</a></h4>
                            <span class="sub-title">Garantie pièces & main d’oeuvre</span>
                        </div>
                    </div>
                   </div>
            </div>
            </div>
        </section>

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Contact</h3>
                        <p class="text">Nos contacts web et locale, disponible 24h/24 tous les jours!</p>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-whatsapp"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text" style="margin-top: 15px"> 00229 XXX XXX XX</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">support@bifm-tech.com</p>
                                <p class="text">info@bifm-tech.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-facebook"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text" style="margin-top: 15px">@bifmtec</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Laisser nous <span>un message.</span></h4>

                        <form id="contact-form" action="/Devis" method="POST"
                        enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Nom</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Nom">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Email</label>
                                        <div class="input-items default">
                                            <input type="email" name="email" placeholder="Email">
                                            <input type="text" name="category" value="MESSAGE" style="visibility: hidden">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input mt-25">
                                        <label>Message</label>
                                        <div class="input-items default">
                                            <textarea name="contact" placeholder="Message"></textarea>
                                            <i class="lni lni-pencil-alt"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <button class="main-btn light-rounded-two" type="submit" >Envoyer</button>
                                    </div> <!-- form input -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

@endsection


