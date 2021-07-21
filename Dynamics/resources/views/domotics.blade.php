@extends('layouts.app')

@section('content')
<section id="home" class="slider_area">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/dgh.jpg') }}" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 data-animation="animated bounceInDown" style = "color: #121212">Domotique</h1>
                <p data-animation="animated lightSpeedIn" style = "color: #121212">Augmenter le confort de votre maison et passé à la Smart home. Les maisons intelligente de demain c'est avec nous.</p>
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
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Interphone</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">Nous proposons à notre clientèle des solutions de visiophonie/vidéophone et d’interphone pour les habitations résidentielles, les logements collectifs, les entreprises, administrations et industrie.</p>
                                    </div>
                                </div> 
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Smart Home </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">La domotique (smart home en anglais) est l’ensemble des processus automatisables et systèmes techniques dans les maisons et immeubles, dont l'objectif est d'améliorer la qualité de vie, la sécurité et l'utilisation efficace de l'énergie sur la base de dispositifs et d'installations en réseau et contrôlables à distance. Elle permet aussi la diminution de l’empreinte écologique de l’utilisateur en facilitant une meilleure maîtrise de la consommation énergétique de l’habitat, en améliorant l’efficience énergétique des installations. Nous garantissons des bâtiments, des systèmes et des infrastructures sûrs, économiques, résilients et confortables, de la protection des bien à l'automatisation intelligente des bâtiments.</p>
                                    </div>
                                </div>
                            </div> 
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
                    <p class="text">4 fonctions clés pour rendre son habitat ou local commercial autonome et intelligent.!</p>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Autonomie </a></h4>
                        <div class="features-icon">

                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Nous sommes la référence  pour l' Installation et rénovation électrique et les Dépannages Electriques.</p>
                    </div>
                </div> <!-- single features -->
            </div>
            <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Sécurité</a></h4>
                        <div class="features-icon">

                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Protéger les biens et les personnes, anticiper, vous alerter et vous permettre d’agir… La domotique est au service de votre sécurité et celle de votre maison</p>
                    </div>
                </div> <!-- single features -->
            </div>
            <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Confort</a></h4>
                        <div class="features-icon">
                            
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Protéger les biens et les personnes, anticiper, vous alerter et vous permettre d’agir… La domotique est au service de votre sécurité et celle de votre maison</p>
                    </div>
                </div> <!-- single features -->
            </div>

            <div  data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Energie</a></h4>
                        <div class="features-icon">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Loger à son domicile en toute autonomie, malgré son état physique, son âge ou sa santé, c’est possible ! Nos systèmes vous permettent d’adapter intégralement  votre habitation</p>

                    </div>
                </div> <!-- single features -->
            </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
@endsection

@section('devis')
 @include('layouts.ctc')   
@endsection