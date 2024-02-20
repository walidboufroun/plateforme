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
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="">

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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Dazzle Pages - Free HTML landings for increasing conversion rate">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href=" {{ asset('js/manifest.json') }}">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Dazzle Pages">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="DazzlePages">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png?v=1.0.0">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png?v=1.0.0">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png?v=1.0.0">
  <link rel="manifest" href="site.webmanifest?v=1.0.0">
  <link rel="mask-icon" href="safari-pinned-tab.svg?v=1.0.0" color="#3c3ce5">
  <link rel="shortcut icon" href="favicon.ico?v=1.0.0">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="mstile-150x150.png">
  <meta name="msapplication-TileColor" content="#3c3ce5">

  <!-- Color the status bar on mobile devices -->
  <link rel="stylesheet" href="{{ asset('css/new.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendor.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
  
</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{ asset('images/hero-bg.png') }}" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid-top">
          <div class="contact_nav">
            <a href="#footer">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +213 558629858
              </span>
            </a>
            <a href="#footer">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : gnov2023@gmail.com
              </span>
            </a>
            <a href="{{ route('ESPACE-CLIENT') }}" class="aflex"><i class="fa fa-user-circle" aria-hidden="true"></i><span>CLIENT</span></a>
            <a href="{{ route('ESPACE-ADMIN') }}" class="aflex"><i class="fa fa-user-circle-o" aria-hidden="true"></i><span>ADMIN</span></a>
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

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item @if (trim($__env->yieldContent('title')) == 'Welcome') active @endif ">
                <a class="nav-link " href="{{ route('welcome') }}"> Acceuil</a>
              </li>
              <li class="nav-item @if (trim($__env->yieldContent('title')) == 'US') active @endif">
                <a class="nav-link" href="{{ route('why') }}">Pouquoi Nous</a>
              </li>
              <li class="nav-item @if (trim($__env->yieldContent('title')) == 'Products') active @endif">
                <a class="nav-link" href="{{ route('product') }}">Products</a>
              </li>
              <li class="nav-item  @if (trim($__env->yieldContent('title')) == 'Contact') active @endif">
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
  </div>