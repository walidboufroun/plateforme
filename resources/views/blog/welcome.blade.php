@extends("blog/layouts.layout")

@section("title", "Welcome")

@section("content")
<!-- end header section -->
@if(Session::has('success'))
<div class="alert alert-success">
  {{ Session::get('success') }}
</div>
@endif
<!-- slider section -->
<div id="main" aria-label="content">
  <header class="section section--header">
    <div class="section__inner-wrapper">
      <div class="header">

        <div class="header__intro">
          <h1 class="header__title">Permettez-nous de vous aider à trouver la meilleure gestion des déchets</h1>
          <p class="header__text"> </p>
          <a class="c-btn c-btn--header" data-scroll href="{{ route('contact') }}" aria-label="Subscribe">Conactez-nous</a>
        </div>
        <a class="c-link c-link--header" data-scroll href="#feature" aria-label="Go to Feature">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="17" fill="none">
            <path stroke="#fff" d="M6.5 0v16m0 0L1 10.6M6.5 16l5.5-5.4" />
          </svg>
        </a>
      </div>
    </div>
  </header>
  <main class="main">
    <section class="section section--benefits">
      <div class="c-benefits__bg c-placeholder" data-large="images/cube.jpg">
        <img src="images/cube-placeholder.jpg" class="c-placeholder__image">
        <div style="padding-bottom: 15rem;"></div>
      </div>
      <div class="section__inner-wrapper">
        <div class="c-benefits">
          <div class="c-benefits__item">
            <div class="c-benefits__icon">
              <img src="{{ asset('images/rse.png') }}" width="49" height="51" fill="none">
            </div>
            <p class="c-benefits__note">
              RSE : En intégrant les principes de la RSE dans notre activité, nous nous engageons à gérer les déchets de
              manière durable, éthique et responsable.
            </p>
          </div>
          <div class="c-benefits__item">
            <div class="c-benefits__icon">
              <img src="{{ asset('images/shield.png') }}" width="49" height="51" fill="none">
            </div>
            <p class="c-benefits__note">
              HSE : Notre engagement en matière de santé, sécurité et environnement est fondamental dans notre approche
              de gestion des déchets.
            </p>
          </div>
          <div class="c-benefits__item">
            <div class="c-benefits__icon">
              <img src="{{ asset('images/economique.png') }}" width="49" height="47" fill="none">
              <path fill="#000" fill-rule="evenodd"
                d="M26.5 46.8H14.3v-13a4 4 0 0 0 2.7-2.2c4.4 1.7 7.4-4.9 3.7-7.5 2-2.4.5-5.8-2.5-5.4-1.4-5-8.4-5-9.9 0-2.8-.5-4.4 2.6-2.8 4.9-3.4 3-.2 8.6 3.8 7.4a4.2 4.2 0 0 0 3 2.8v13H8.2V36.4c-.7-.5-1.2-1.1-1.1-1.1C3 34.7 0 30.8 0 26.7c0-1.3.3-2.5.8-3.7-.6-3.5 1.4-7.1 4.8-8.3a9.3 9.3 0 0 1 7.3-4L24.5 0 49 22.6l-2.7 3.2L24.5 5.7l-6.7 6.2a9 9 0 0 1 1.7 1.2l5-4.6c2.2 2.2 4.5 4.3 6.9 6.4l4.6 4.2 6.9 6.4v21.3H30.6V36h-4v10.6zm-4-12a7.7 7.7 0 0 1-4.1 1.3v6.4h4v-7.6zm2.8-3h9.4v10.7h4V27.4L24.5 14.2l-1.6 1.5a7.4 7.4 0 0 1 2.7 7.7 8.9 8.9 0 0 1-.2 8.5zm-12.1-7.7c3-2.2 6.6 1.6 4.7 4.7 0-3.1-1.8-4.9-4.7-4.7zm-4.3 2.5c-2.6-4 2-8.9 5.9-6.2-3.9 0-6 2.3-6 6.2z"
                clip-rule="evenodd" /></svg>
            </div>
            <p class="c-benefits__note">
              Aspect économique : Notre approche de la gestion des déchets intègre des considérations économiques
              essentielles.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section section--featured-listing" id="feature">
      <div class="section__inner-wrapper">
        <div class="section__header">
          <h2 class="section__title">Notre Avantages Compétitive :</h2>
        </div>
        <div class="c-featured-listing" data-flickity='{ "watchCSS": true}'>
          <div class="c-featured-listing__card carousel-cell">
            <div class="c-featured-listing__wrap">
              <div class="c-featured-listing__row">
                <h4 class="c-featured-listing__title">Tri</h4>
                <p class="c-featured-listing__text">Tri Sélectif Automatique</p>
              </div>
            </div>
          </div>
          <div class="c-featured-listing__card carousel-cell">
            <div class="c-featured-listing__wrap">
              <div class="c-featured-listing__row">
                <h4 class="c-featured-listing__title">Numérisation</h4>
                <p class="c-featured-listing__text">Numérisation De Données. </p>
              </div>
            </div>
          </div>
          <div class="c-featured-listing__card carousel-cell">
            <div class="c-featured-listing__wrap">
              <div class="c-featured-listing__row">
                <h4 class="c-featured-listing__title">Valorisationr</h4>
                <p class="c-featured-listing__text">Valorisation Depuis Source</p>
              </div>
            </div>
          </div>
          <div class="c-featured-listing__card carousel-cell">
            <div class="c-featured-listing__wrap">
              <div class="c-featured-listing__row">
                <h4 class="c-featured-listing__title">Contrôle</h4>
                <p class="c-featured-listing__text">Contrôle De L'état De La Poubelle.</p>
              </div>
            </div>
          </div>
          <div class="c-featured-listing__card carousel-cell">
            <div class="c-featured-listing__wrap">
              <div class="c-featured-listing__row">
                <h4 class="c-featured-listing__title">Elimination</h4>
                <p class="c-featured-listing__text">Elimination De Sensibilisation.</p>
              </div>
            </div>
          </div>

          <div class="c-featured-listing__card carousel-cell">
            <div class="c-featured-listing__wrap">
              <div class="c-featured-listing__row">
                <h4 class="c-featured-listing__title">Remplissage</h4>
                <p class="c-featured-listing__text">Le Taux De Remplissage Actuel. </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>
</div>

<!-- about section -->
<section class="about_section layout_padding">
  <div class="container  ">
    <div class="section__header">
      <h2 class="section__title">Qui Somme Nous ?</h2>
    </div>
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="{{ asset('images/gnov5.png') }}" alt="" width="62%">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <p>
          <h2>Generation of Innovation</h2>
          <hr>
          Une Start-Up passionnée par l'innovation dans le domaine de la gestion des déchets.
          Notre mission est de révolutionner la façon dont les déchets sont gérés en Algérie et au-delà.
          Nous croyons fermement que la technologie peut jouer un rôle essentiel dans la préservation de notre
          environnement
          tout en créant des opportunités économiques.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->
<!-- team section -->
<section class="team_section layout_padding">
  <div class="container-fluid">
    <div class="heading_container heading_center">
      <h2 class="">
        Co-<span> Founders </span>
      </h2>
    </div>

    <div class="team_container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('images/team1.png') }}" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Boufroune Walid
              </h5>
              <!-- <p>
                  Marketing Head
                </p> -->
            </div>
            <div class="social_box">

              <a href="#">
                <i class="fa fa-yotube-play" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-yotube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('images/team2.jpg') }}" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Boulsane Zakaria
              </h5>
              <!-- <p>
                  Marketing Head
                </p> -->
            </div>
            <div class="social_box">

              <a href="#">
                <i class="fa fa-yotube-play" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-yotube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('images/team3.jpg') }}" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Diguer Imane
              </h5>
              <!-- <p>
                  Marketing Head
                </p> -->
            </div>
            <div class="social_box">

              <a href="#">
                <i class="fa fa-yotube-play" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-yotube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end team section -->

@endsection