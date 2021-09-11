@extends('layouts.app')
@section('title', 'Système de controle d\'accès ')
@section('content')
    <section id="home" class="slider_area">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img data-animation="animated zoomInUp" class="first-slide" src="{{ URL::asset('images/CA.jpg') }}"
                        alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 data-animation="animated bounceInDown" style="color: #121212">Système de contrôle d'accès.
                            </h1>
                            <p data-animation="animated lightSpeedIn" style="color: #121212">Partenaire installateur en
                                solution de contrôle d'accès .</p>
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
                            <h4 class="title">Système de contrôle d´accès </h4>
                        </div>
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">Contrôle des personnes</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">Le contrôle d’accès offre la
                                                possibilité de vérifier si une personne à les droits nécessaires d’accéder à
                                                une zone de vos locaux à l’aide de badges ou tout autre éléments permettant
                                                l’identification de la personne.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">Vidéo protection </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text" style="text-align: justify">Nos solutions vous permettent
                                                d’éviter toute visite indésirable dans vos locaux, surtout pendant vos
                                                heures d’absence.

                                                Pour cela, BiFm-Tech vous propose une large gamme de produits et logiciels
                                                vous permettant un contrôle TOTAL des entrées et sorties. </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ URL::asset('images/CAS.jpg') }}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="features-area">
        <div data-xanim="glideInUp" class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Solution</h3>
                        <p class="text"> NOS SOLUTIONS D'INTERPHONIE AUDIO ET VIDÉO</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 478px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Interphone</a></h4>
                            <div class="features-icon">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">
                                Nous proposons à notre clientèle des solutions de visiophonie/vidéophone et d’interphone
                                pour les habitations résidentielles, les logements collectifs, les entreprises,
                                administrations et industrie.</p>

                        </div>
                        <img style="max-height: 200px ; position: absolute; bottom: 0;  margin-bottom: 25px" src="{{ URL::asset('images/zen18.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 478px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Interphone Sans-fil</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Avantageux pour les rénovations dans les maisons non pré-équipées de câbles, les
                                systèmes de vidéophone sans-fil offrent également d’excellentes performances.</p>

                        </div>
                        <img style="max-height: 200px ; position: absolute; bottom: 0;  margin-bottom: 25px" src="{{ URL::asset('images/zen19.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>
                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 478px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Interphone Tactile</a></h4>

                        </div>
                        <div class="features-content">
                            <p class="text">
                                Avec un design soigné, les vidéophones ou visiophones à dalle tactile apportent un confort
                                inégalable grâce à l’affichage sur un large écran de 7 pouces.</p>

                        </div>
                        <img style="max-height: 200px ; position: absolute; bottom: 0;  margin-bottom: 25px" src="{{ URL::asset('images/zen20.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 488px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Interphone IP/GSM</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Recevez directement sur votre Smartphone les appels émis depuis votre portier
                                côté rue et contrôler les accès grâce aux nombreux avantages des vidéophones IP/GSM….</p>

                        </div>
                        <img style="max-height: 200px ; position: absolute; bottom: 0;  margin-bottom: 25px" src="{{ URL::asset('images/zen21.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 488px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>Interphone à combiné </a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">
                                Design et élégances, les vidéophones à combiner associent robustesse &
                                simplicité. Les performances ne sont pas lésiné avec un affichage sur écran TFT de 4,3
                                pouces.</p>
                        </div>
                        <img style="max-height: 200px ; position: absolute; bottom: 0;  margin-bottom: 25px" src="{{ URL::asset('images/zen22.jpg') }}" alt="capteurs">
                    </div> <!-- single features -->
                </div>

                <div data-xanim="glideInUp" class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40" style="height: 488px">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a>INTERPHONIE TERTIAIRE, RÉSIDENTIEL ET COLLECTIF</a></h4>
                            <div class="features-icon">

                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">L’interphone audio/vidéo permet de gérer l’accès des lieux en toute
                                tranquillité, qu’ils soient du domaine résidentiel ou professionnel. Toutes nos solutions
                                reposent sur un ensemble de produits performants, fiables et faciles d’utilisation. Nos
                                équipements d’interphonie/vidéophonie diffèrent et s’adaptent largement selon le type
                                d’application auxquelles ils sont destinés</p>
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
