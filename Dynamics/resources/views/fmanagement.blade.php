@extends('layouts.app')

@section('content')

<section id="home" class="slider_area">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/fmb.jpg') }}"  alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 data-animation="animated bounceInDown" style = "color: #121212">Facility Management-FM</h1>
                <p data-animation="animated lightSpeedIn" style = "color: #121212">La Gestion des Installations ou Facility Management (FM) est un service PRO de notre équipe technique pour toutes prestations de services.</p>
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
                        <h4 class="title">Facility Management-FM</h4>
                    </div> <!-- faq title -->
                    <div class="about-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">C'est quoi ?</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text" style="text-align: justify">Le Facility management qui veut dire Gestion des installations se définit comme l’ensemble des services et prestations liés a la bonne gestion opérationnelle et Stratégiques des entreprises. Dans les bâtiments, le confort de l'utilisateur et les exigences de l'opérateur ont la plus haute priorité. La disponibilité du système, l'efficacité énergétique et l'optimisation des coûts sont à la fois une exigence et une obligation pour nous. Face à ces enjeux Nous vous proposons des solutions intelligentes et des services innovants pour une gestion efficace et durable de vos bâtiments et espaces.</p>
                                    </div>
                                </div> 
                            </div> <!-- card -->
                        </div>
                    </div> <!-- faq accordion -->
                </div> <!-- faq content -->
            </div>
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="{{ URL::asset('images/bsm.jpg') }}" alt="about">
                </div> <!-- faq image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
@endsection

@section('devis')
 @include('layouts.ctc')   
@endsection