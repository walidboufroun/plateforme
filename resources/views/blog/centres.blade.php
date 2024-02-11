<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> GNOV </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

</head>

<body class="sub_page">

    <div class="hero_area">

        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="images/hero-bg.png" alt="">
            </div>
        </div>

        <!-- header section strats -->
        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid-top ">
                    <div class="contact_nav">
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call : +213 558629858
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                Email : gnov2023@gmail.com
                            </span>
                        </a>
                        <a href="{{ route('ESPACE-CLIENT') }}"><span>Espace CLIENT</span></a>
                        <a href="{{ route('ESPACE-ADMIN') }}"><span>Espace ADMIN</span></a>
                        <!-- <a href="">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>
            Location
            </span>
            </a> -->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('welcome') }}">
                        <span>
                            <img src="{{ asset('images/gnov5.png') }}" alt="" style="width: 30%;">
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('welcome') }}">Acceuil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}"> Qui Somme Nous</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('service') }}">Services & Solutions</a>
                            </li>
                            <div class="subnav">
                                <li class="nav-item active">
                                    <button class="nav-link subnavbtn">Secteurs <span class="sr-only">(current)</span> </a>
                                </li>
                                <div class="subnav-content">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('immobiliers') }}">Immobiliers</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('centres') }}">Centres commerciaux <span class="sr-only">(current)</span></a>
                                    </li>
                                </div>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('why') }}">Pouquoi Nous</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Contactez Nous</a>
                            </li>
                            <!--
            <li class="nav-item">
            <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
            </li>
            <form class="form-inline">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            </form>
            -->
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

        <!-- secteur section -->
        <section class="service_section layout_padding">
            <div class="">
                <div class="heading_container heading_center">
                    <h2>Secteur des <span>Centres Commerciaux</span></h2>
                    <p>Les centres commerciaux connaissent une forte fréquentation et génèrent d'importantes <br>
                        quantités
                        de déchets issus des activités de vente au détail. Les principaux insights incluent :</p>
                    <br>
                </div>
                <div class="row second_row">
                    <div class="col-lg-6 col-md-12 immo_first_row">
                        <h2>Déchets de vente au détail :</h2>
                        <p>Les défis liés à la gestion des déchets d'emballage, des déchets
                            alimentaires et d'autres flux de déchets générés par le commerce de détail.</p>
                        <h2>Gestion de la foule :</h2>
                        <p>Collecte et élimination efficaces des déchets pour maintenir des
                            environnements de shopping propres et sûrs pour les visiteurs.</p>
                        <h2>Initiatives de recyclage :</h2>
                        <p>Demande croissante pour que les centres commerciaux mettent en
                            place des programmes de recyclage et réduisent leur impact environnemental.</p>
                    </div>
                    <div class="col-lg-6 col-md-12 text-right">
                        <img src="{{ asset('images/centre2.jpg') }}" alt="Gestion des déchets" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="service_section layout_padding">
            <div class="">
                <div class="heading_container heading_center">
                    <h2>Solutions pour le Secteur des<span>Centres Commerciaux</span></h2>
                    <p>Nos solutions de gestion des déchets pour les centres commerciaux répondent à ces besoins
                        spécifiques :</p>
                    <br>
                </div>
                <div class="row second_row">
                    <div class="col-lg-6 col-md-12 immo_second_row">
                        <ul class="list-group">
                            <li class="list-group-item">Bacs à déchets intelligents : Bacs à déchets connectés à l'IoT
                                équipés de capteurs pour le tri automatique des déchets et la surveillance des volumes.
                            </li>
                            <li class="list-group-item">Engagement du public : Affichages interactifs et supports
                                pédagogiques dans les centres commerciaux pour promouvoir la réduction des déchets et la
                                sensibilisation au recyclage.</li>
                            <li class="list-group-item">Analyse des données : Outils d'analyse avancés pour suivre les
                                tendances des déchets, optimiser les itinéraires de collecte et identifier les
                                opportunités de réduction des déchets.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 text-right">
                        <img src="{{ asset('images/GBIN.jpg') }}" alt="Gestion des déchets" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- end secteur section -->

        <!-- info section -->

        <section class="info_section layout_padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 info_col">
                        <div class="info_contact">
                            <h4>
                                Address
                            </h4>
                            <div class="contact_link_box">
                                <!-- <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                    Location
                    </span>
                </a> -->
                                <a href="">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>
                                        +213 558629858
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>
                                        gnov2023@gmail.com
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="info_social">
                            <a href="https://www.facebook.com/gnovstar">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <!-- <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a> -->
                            <a href="https://www.linkedin.com/company/gnov">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.youtube.com/@GNOV-uc9fb">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/gnovstartup/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 info_col">
                        <div class="info_detail">
                            <h4>
                                Vision
                            </h4>
                            <p>
                                Notre vision est de vous offrir une solution pratique qui simplifie la gestion de vos
                                déchets tout en stimulant votre entreprise. </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 mx-auto info_col">
                        <div class="info_link_box">
                            <h4>
                                Links
                            </h4>
                            <div class="info_links">
                                <a class="" href="{{ route('welcome') }}">
                                    Acceuil
                                </a>
                                <a class="" href="{{ route('about') }}">
                                    Qui somme nous
                                </a>
                                <a class="" href="{{ route('service') }}">
                                    Nos Services
                                </a>
                                <a class="active" href="{{ route('Secteur') }}">
                                    Nos Secteurs
                                </a>
                                <a class="" href="{{ route('why') }}">
                                    Pourquoi nous
                                </a>
                                <a class="" href="{{ route('team') }}">
                                    Notre Team
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 info_col ">
                        <h4>
                            Contactez Nous
                        </h4>
                        <form action="#">
                            <a class="contact" href="">
                                Contactez Nous
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- end info section -->

        <!-- footer section -->
        <section class="footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">GNOV</a>
                </p>
            </div>
        </section>
        <!-- footer section -->

        <!-- jQery -->
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <!-- bootstrap js -->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <!-- owl slider -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <!-- custom js -->
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
        </script>
        <!-- End Google Map -->

</body>

</html>
