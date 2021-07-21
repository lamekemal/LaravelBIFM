@extends('layouts.app')

@section('content')
<section id="home" class="slider_area">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/lp.jpg') }}" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 data-animation="animated bounceInDown" style = "color: #121212">Installation et rénovation électrique.</h1>
                <p data-animation="animated lightSpeedIn" style = "color: #121212">BifmTec réalise l’installation électrique de vos maison entreprise et vous accompagne depuis l’établissement du devis jusqu’à l’installation de votre projet</p>
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
                        <h4 class="title">Electricité</h4>
                    </div> <!-- faq title -->
                    <div class="about-accordion">
                        <div class="accordion" id="accordionExample">

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">Il est aujourd’hui impensable de vivre dans un monde sans électricité tant les appareils électriques se multiplient dans nos foyers. BifmTec réalise l’installation électrique de vos maison ou entreprise et vous accompagne depuis l’établissement du devis jusqu’à l’installation de votre projet. </p>
                                    </div>
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">Ainsi profitez de notre expertise en électricité pour entreprendre tous vos projets d’installation, remise aux normes, remplacement de vos interrupteurs et lampes ou revoir l’implantation de votre installation électrique pour une bonne efficacité énergétique.  </p>
                                    </div>
                                </div>                                
                        </div>
                    </div> <!-- faq accordion -->
                </div> <!-- faq content -->
            </div>
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="{{ URL::asset('images/pw.jpg') }}" alt="about">
                </div> <!-- faq image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<section id="services" class="features-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-10">
                    <h3 class="title">Offre Technique</h3>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Dépannages Electriques</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-trowel"></i>
                            <img class="shape" src="{{ URL::asset('images/f-shape-1.svg') }}" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Une défaillance électrique peut avoir des sources multiples et engendrer des dégâts matériels voire humains dans votre habitation ou local professionnel. Face à une installation électrique, seul un technicien qualifié peut trouver l’origine de la panne.</p>
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Alimentation Solaire</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-sun"></i>
                            <img class="shape" src="{{ URL::asset('images/f-shape-1.svg') }}" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Nous disposon de toute les technologie de pointe pour une installation solaire durable et efficiente.</p>
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Installation electrique</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-plug"></i>
                            <img class="shape" src="{{ URL::asset('images/f-shape-1.svg') }}" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Notre service technique vous offre l'appui necessaire pour toute installation électrique (domicile ou entreprise).</p>
                    </div>
                </div> <!-- single features -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<section id="team" class="team-area pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-30">
                    <h3 class="title">Votre Partenaire</h3>
                    <span class="sub-title">Pour une installation, une remise aux normes 
                        ou un dépannage électrique : Notre équipe qualifiée saura vous 
                        guider pour une prestation à la hauteur de vos attentes.</span>
                </div> 
            </div>
        </div>

            <div class="row" style="margin-top:175px;">
            <div class="col-lg-4 col-sm-6">
                <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-check-box"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Installation électrique</a></h4>
                        <span class="sub-title">
                            Installation neuf et rénovation
                            <br>
                            Mise en conformité tableau électrique
                            <br>
                            Agrandissement et extension électrique
                            <br>
                            Repérage et étiquetage des circuits de courant
                            <br>
                            Réaménagement des circuits

                        </span>
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
                        <h4 class="team-name"><a href="#">Solutions éclairages</a></h4>
                        <span class="sub-title">
                            Spots LED
                            <br>
                            Downlights LED
                            <br>
                            Dalles et pavés LED
                            <br>
                            Projecteurs extérieurs LED
                            <br>
                            Hublots intérieurs / extérieurs
                        </span>
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
                        <h4 class="team-name"><a href="#">Dépannage électricité</a></h4>
                        <span class="sub-title">
                            Compteur électrique
                            <br>
                            Coupure de courant
                            <br>
                            Remplacement Appareillages
                            <br>
                            Toutes marques électriques
                            <br>
                            Particuliers – Professionnels
                        </span>
                    </div>
                </div> 
                </div>
        </div>

        <div class="row" style="margin-top:175px">
            <div class="col-lg-4 col-sm-6">
                <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-check-box"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Contrôle Électrique</a></h4>
                        <span class="sub-title">
                            Mise à la terre
                            <br>
                            Circuits électriques
                            <br>
                            Sections et calibres des conducteurs
                            <br>
                            Dispositifs différentiels
                            <br>
                            Coupure d’urgence
                        </span>
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
