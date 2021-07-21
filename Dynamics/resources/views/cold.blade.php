@extends('layouts.app')

@section('content')
    
<section id="home" class="slider_area">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/clm.jpg') }}"  alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 style = "color: #121212" data-animation="animated bounceInRight" >Climatisation.</h1>
                <p style = "color: #121212" data-animation="animated zoomInRight" >Système de climatisation, matériel de climatisation BifmTec vous offre l'expertise et la qualité dans son service et vos besoins.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

</section>
<!--====== SLIDER PART ENDS ======-->
<!--====== ABOUT PART START ======-->
<section id="about" class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="faq-content mt-45">
                    <div class="about-title">
                        <h6 class="sub-title">Informations</h6>
                        <h4 class="title">Climatisation</h4>
                    </div> <!-- faq title -->
                    <div class="about-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Système de climatisation</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">Nos systèmes de climatisation proposent des solutions efficaces à tous les problèmes de rafraîchissement et de ventilation des locaux domestiques et professionnels. En alliant confort d’utilisation, efficacité et consommation électrique réduite, nous vous proposons des solutions personnalisées afin de répondre à tous vos besoins.</p>
                                    </div>
                                </div> 
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Principe de fonctionnement </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">Le rôle fondamental de la climatisation est de produire de l’air froid, afin de rafraîchir l’air ambiant dans une pièce ou local, la climatisation prélève la chaleur provenant de la pièce et la rejette à l’extérieur par l’intermédiaire des conduits de cuivre pour décharger la chaleur accumulée dans l’atmosphère.</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div> <!-- faq accordion -->
                </div> <!-- faq content -->
            </div>
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="{{ URL::asset('images/cold.jpg') }}" alt="about">
                </div> <!-- faq image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== PRINICNG START ======-->
<section id="pricing" class="pricing-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-25">
                    <h3 class="title">Offre technique</h3>
                    <!--p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p-->
                </div>
            </div>
        </div>
       <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="pricing-style mt-30">
                    <div class="pricing-icon text-center">
                        <!--img src="{{ URL::asset('images/basic.svg') }}" alt=""-->
                    </div>
                    <div class="pricing-header text-center">
                    <h5 class="sub-title">Climatiseur Mural</h5>
                    </div>
                    <div class="pricing-list">
                        <ul>
                            <li><i class="lni lni-check-mark-circle"></i> •	Climatiseur mono-split ou multi-split </li>
                            <li><i class="lni lni-check-mark-circle"></i> •	Installation en applique (contre un mur)</li>
                            <li><i class="lni lni-check-mark-circle"></i> •	Piloté par télécommande infrarouge (ou wifi) </li>
                            <li><i class="lni lni-check-mark-circle"></i> •	Climatiseur installé le plus courant en habitation individuelle, bureaux ou local </li>
                        </ul>
                    </div>   
                </div>
            </div>
            
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="pricing-style mt-30">
                    <div class="pricing-icon text-center">
                        <!--img src="{{ URL::asset('images/pro.svg') }}" alt=""-->
                    </div>
                    <div class="pricing-header text-center">
                    <h5 class="sub-title">Climatiseur Cassette</h5>
                    </div>
                    <div class="pricing-list">
                        <ul>
                            <li><i class="lni lni-check-mark-circle"></i> •	Climatiseur mono-split ou multi-split </li>
                            <li><i class="lni lni-check-mark-circle"></i> •	Installation encastré dans le faux plafond</li>
                            <li><i class="lni lni-check-mark-circle"></i> •	Application idéale pour les bureaux, commerces ou locaux </li>
                            <li><i class="lni lni-check-mark-circle"></i> •	Piloté par télécommande infrarouge ou mural</li>
                        </ul>
                    </div>
                    <div class="pricing-btn rounded-buttons text-center">
                        <!--a class="main-btn rounded-one" href="#">GET STARTED</a-->
                    </div>
                </div>
            </div>
            
        </div>
   </div>
</section>
<!--====== PRINICNG ENDS ======-->

    <!--====== TEAM START ======-->

    <section id="team" class="team-area pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-30">
                    <h3 class="title">UN SERVICE COMPLET COMPRENANT:</h3>
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
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-check-box"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">APPLICATION</a></h4>
                        <span class="sub-title">Produit fongicides anti-bactériens</span>
                    </div>
                </div>
              </div>

            <div class="col-lg-4 col-sm-6">
                <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-calendar"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">NETTOYAGE</a></h4>
                        <span class="sub-title">Des filtres, turbines de soufflage, condensateur, carrosserie.</span>
                    </div>
                </div> 
                </div>

            <div class="col-lg-4 col-sm-6">
                <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-users"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">CONTROL</a></h4>
                        <span class="sub-title">des étanchéités et des températures</span>
                    </div>
                </div>
               </div>
        </div>
        </div> 
    </section>
@endsection

@section('devis')
 @include('layouts.ctc')   
@endsection