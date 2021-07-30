@extends('layouts.app')
@section('title', 'Tableau de bord')
@section('content')
        <section id="team" class="team-area pt-120 pb-130">

            @if (session()->has('message'))
            <div style="margin-top: -5px; margin: -5px">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info">
                        {{ session()->get('message') }}
                    </li>
                </ul>
            </div>
            @endif

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-title text-center pb-30">
                            <h3 class="title">DEVIS ET MESSAGES CLIENTS</h3>
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
                                <h4 class="team-name"><a> {{count($devis) }}</a></h4>
                                <span class="sub-title">Nombre total de devis / messages</span>
                                <a href="/Devis" class="btn btn-outline-info"  style="margin: 5px">Aller à la page de gestion</a>
                            </div>
                        </div>
                      </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="team-content">
                                <h4 class="team-name"><a>{{count($vdevis) }}</a></h4>
                                <span class="sub-title">Devis / messages traités</span>
                                <a href="/Devis/Traite" class="btn btn-outline-info"  style="margin: 5px">Aller à la page de gestion</a>
                            </div>
                        </div>
                        </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="team-content">
                                <h4 class="team-name"><a>{{count($nvdevis) }}</a></h4>
                                <span class="sub-title">Devis / messages non traités</span>
                                <a href="/Devis/Nontraite" class="btn btn-outline-info"  style="margin: 5px">Aller à la page de gestion</a>
                            </div>
                        </div>
                       </div>
                </div>
                </div>
            </section>

            <section id="team" class="team-area pb-130">

                @if (session()->has('message'))
                <div style="margin-top: -5px; margin: -5px">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info">
                            {{ session()->get('message') }}
                        </li>
                    </ul>
                </div>
                @endif

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="section-title text-center pb-30">
                                <h3 class="title">BOUTIQUE BISHOP</h3>
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
                                    <h4 class="team-name"><a>{{count($sellings) }}</a></h4>
                                    <span class="sub-title">Nombre total des Achats BiShop</span>
                                    <a href="/Selling" class="btn btn-outline-info"  style="margin: 5px">Aller à la page de gestion</a>
                                </div>
                            </div>
                          </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                <div class="team-content">
                                    <h4 class="team-name"><a>{{count($vsellings) }}</a></h4>
                                    <span class="sub-title">Achat BiShop validé</span>
                                    <a href="/Selling/Traite" class="btn btn-outline-info"  style="margin: 5px">Aller à la page de gestion</a>
                                </div>
                            </div>
                            </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                <div class="team-content">
                                    <h4 class="team-name"><a>{{count($nvsellings) }}</a></h4>
                                    <span class="sub-title">Achat BiShop non validé</span>
                                    <a href="/Selling/Nontraite" class="btn btn-outline-info" style="margin: 5px">Aller à la page de gestion</a>
                                </div>
                            </div>
                           </div>
                    </div>
                    </div>
                </section>
 @endsection
