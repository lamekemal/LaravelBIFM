<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- META DATA -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Building Infrastructure and Facility Management Technology Website Benin">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BIFM - @yield('title')</title>
    <!--title>{{ config('app.name', 'Building Infrastructure and Facility Management Technology') }}</title-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <!-- Styles -->
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css"-->
        <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"-->
    <!--link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css"-->
    <!--link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css"-->

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/appx.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/LineIcons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reboundgen.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <div>
            @yield('preloader')
        </div>
        <section class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="  /">
                                <img src="{{ URL::asset('images/logo.png') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo"
                                aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                                <ul class="navbar-nav m-auto">
                                    @include('layouts.nav_items')
                                </ul>
                            </div>
                            <div class="navbar-btn d-none d-sm-inline-block">
                                <ul>
                                </ul>
                            </div>
                            <div class="navbar-btn d-none d-sm-inline-block">
                                <ul>
                                    <li><a class="solid"
                                            href="https://www.linkedin.com/in/bifm-technologies-486b1b212"><i
                                                class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>
    </div>

    <div>
        @yield('content')
        @yield('devis')
    </div>

    <div>
        @include('layouts.footer')
    </div>

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/modernizr-3.7.1.min.js') }}"></script>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.js"></script-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
