@extends('layouts.app')
@section('title', 'Cablage Réseau')
@section('content')
<section id="home" class="slider_area">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/CR.jpg') }}"
                    alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1 data-animation="animated bounceInDown" style="color: #121212">Câblage réseau.</h1>
                        <p data-animation="animated lightSpeedIn" style="color: #121212">Nous réalisons vos câblages
                            informatiques et télécomsordonné,complet ou divisé certifié catégorie 6 (câblage haut
                            débit). .</p>
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
                        <h4 class="title">Offre technique et description</h4>
                    </div> <!-- faq title -->
                    <div class="about-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">Nos prestations</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">Etude de projet (devis gratuit);
                                            Câblage (Informatique d’entreprise, bureau, habitation individuelle).</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">Appui technique </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">Mise en place & raccordement (Baie
                                            de brassage, switch, modules), Recette & vérification (Nous validons votre
                                            câblage et vous remettons un cahier de recette qui indique quelles sont les
                                            ‘bonnes’ prises et les autres.)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- faq accordion -->
                </div> <!-- faq content -->
            </div>
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="{{ URL::asset('images/CRS.jpg') }}" alt="about">
                </div> <!-- faq image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
@endsection

@section('devis')
 @include('layouts.ctc')
@endsection
