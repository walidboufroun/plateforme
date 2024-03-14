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
          <a class="c-btn c-btn--header" data-scroll href="{{ route('contact') }}"
            aria-label="Subscribe">Conactez-nous</a>
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
              <img src="images/rse.png" width="49" height="51" fill="none">
            </div>
            <p class="c-benefits__note">
              RSE : En intégrant les principes de la RSE dans notre activité, nous nous engageons à gérer les déchets de
              manière durable, éthique et responsable.
            </p>
          </div>
          <div class="c-benefits__item">
            <div class="c-benefits__icon">
              <img src="images/shield.png" width="49" height="51" fill="none">
            </div>
            <p class="c-benefits__note">
              HSE : Notre engagement en matière de santé, sécurité et environnement est fondamental dans notre approche
              de gestion des déchets.
            </p>
          </div>
          <div class="c-benefits__item">
            <div class="c-benefits__icon">
              <img src="images/economique.png" width="49" height="47" fill="none">
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

<!-- begin secteur -->
<section class="">
  <div class="container">
    <div class="section__header">
      <h2 class="section__title">Secteurs Concernés</h2>
    </div>
  </div>

  <nav class="nav-menu">
    <ul class="ul-menu">
      <li class="li-menu"><a href="#" onclick="showSection(event, 'tout')"><i class="bi bi-house" style="color: #63E6BE;"></i><span>Tout</span></a></li>
      <li class="li-menu"><a href="#" onclick="showSection(event, 'recyclage')"><i class="fa fa-recycle" style="color: #63E6BE;"></i><span>Recyclage</span></a></li>
      <li class="li-menu"><a href="#" onclick="showSection(event, 'immobilier')"><i class="bi bi-buildings" style="color: #63E6BE;"></i><span>Immobilier</span></a></li>
      <li class="li-menu"><a href="#" onclick="showSection(event, 'foire')"><i class="bi bi-shop-window" style="color: #63E6BE;"></i><span>foire</span></a></li>
      <li class="li-menu"><a href="#" onclick="showSection(event, 'centres')"><i class="bi bi-cart3" style="color: #63E6BE;"></i><span>Centre commerciaux</span></a></li>
      <li class="li-menu"><a href="#" onclick="showSection(event, 'hopitaux')"><i class="bi bi-hospital" style="color: #63E6BE;"></i><span>Hôpitaux</span></a></li>
    </ul>

  </nav>

  <div id="tout" class="section-secteur sectionplay" 
    style="display: flex;
    flex-wrap: wrap;
    gap: 3vw;">
    <div class="under-tout">

      <div class="contentUnder">
      <img src="{{ asset('images/recycling_img.png') }}" alt class="img_under_tout">
      <div class="portfolio-info">
        <a href="#" onclick="showSection(event, 'recyclage')" class="menu-item" data-target="recyclage" title="More Details">Recyclage &nbsp; &nbsp;<i class="bi bi-arrow-right"></i></a>
      </div>
      </div>
    </div>
    <div class="under-tout">
      <div class="contentUnder">
      <img src="{{ asset('images/IMMO.jpg') }}" alt class="img_under_tout">
      <div class="portfolio-info">
        <a href="#" onclick="showSection(event, 'immobilier')" class="menu-item" data-target="immobilier" title="More Details">Immoblier &nbsp; &nbsp;<i class="bi bi-arrow-right"></i></a>
      </div>
      </div>
    </div>
    <div class="under-tout">
<div class="contentUnder">
<img src="{{ asset('images/foire.jpg') }}" alt class="img_under_tout">
      <div class="portfolio-info">
        <a href="#" onclick="showSection(event, 'foire')" class="menu-item" data-target="foire" title="More Details">Les Foires &nbsp; &nbsp;<i class="bi bi-arrow-right"></i></a>

      <img src="images/recycling_img.png" alt class="img_under_tout">
      <div>
        <a href="#" class="menu-item" data-target="recyclage" title="More Details">Recyclage</a>
      </div>
    </div>
    <div class="under-tout">
      <img src="images/IMMO.jpg" alt class="img_under_tout">
      <div>
        <a href="#" class="menu-item" data-target="immobilier" title="More Details">Immoblier</a>
      </div>
    </div>
    <div class="under-tout">
      <img src="images/centre.jpg" alt class="img_under_tout">
      <div>
        <a href="#" class="menu-item" data-target="naftal" title="More Details">Naftal</a>
      </div>
</div>
    </div>
    <div class="under-tout">
    <div class="contentUnder">
    <img src="{{ asset('images/centre.jpg') }}" alt class="img_under_tout">
      <div class="portfolio-info">
        <a href="#" onclick="showSection(event, 'centres')" class="menu-item" data-target="centres" title="More Details">Centres commerciaux &nbsp; &nbsp;<i class="bi bi-arrow-right"></i></a>
      <img src="images/centre.jpg" alt class="img_under_tout">
      <div>
        <a href="#" class="menu-item" data-target="centres" title="More Details">Centres commerciaux</a>
      </div>
    </div>
    </div>
    <div class="under-tout">
      <div class="contentUnder">
      <img src="{{ asset('images/hospitals_img.png') }}" alt class="img_under_tout">
      <div class="portfolio-info">
        <a href="#" onclick="showSection(event, 'hopitaux')" class="menu-item" data-target="hopitaux" title="More Details">Hopitaux &nbsp; &nbsp;<i class="bi bi-arrow-right"></i></a>
      </div>
      </div>
    </div>
    <div class="under-tout">
      <div class="contentUnder">
      <img src="{{ asset('images/airports_img.png') }}" alt class="img_under_tout">
      <div class="portfolio-info">
        <a href="" class="menu-item" data-target="air" title="More Details">Air Algérie &nbsp; &nbsp;<i class="bi bi-arrow-right"></i></a>
      </div>
      <img src="images/hospitals_img.png" alt class="img_under_tout">
      <div>
        <a href="#" class="menu-item" data-target="hopitaux" title="More Details">Hopitaux</a>
      </div>
    </div>
    <div class="under-tout">
      <img src="images/airports_img.png" alt class="img_under_tout">
      <div>
        <a href="#" class="menu-item" data-target="air" title="More Details">Air Algérie</a>
      </div>
    </div>
  </div>

  <div id="recyclage" class="section-secteur sectionplay">
    <div class="secteur_con">
      <div class="image-container">
          <img src="{{ asset('images/GBIN.jpg') }}" alt="Image">
      </div>
      <div class="flex--container">
        <div class="text-container">
          <h2>Recyclage</h2>
          <hr>
          <p>Ensemble, faisons un pas vers un avenir plus propre et plus vert ! Avec notre solution de recyclage de pointe, 
            chaque déchet devient une opportunité de préserver notre planète. Rejoignez-nous dans notre mission de valoriser 
            les ressources et de créer un monde où le recyclage est la norme. Choisissez GNOV pour un recyclage efficace, 
            économique et respectueux de l'environnement. Agissons maintenant pour un avenir meilleur !</p>
        </div>
      <div>
            <a class="c-btn c-btn--header" data-scroll href="{{ route('contact') }}" aria-label="Subscribe">Conactez-nous</a>
        </div>
      </div>
  </div>
  </div>

  <div id="immobilier" class="section-secteur sectionplay">
    <div class="secteur_con">
      <div class="image-container">
          <img src="{{ asset('images/photo1709419708.jpeg') }}" alt="Image" style="height: 550px;">
      </div>
      <div class="flex--container">
        <div class="text-container">
          <h2>Les Promotions Immobilières</h2>
          <hr>
          <p>GNOV Smart Bins révolutionne la gestion des déchets pour les promoteurs immobiliers visionnaires. 
            Nos poubelles intelligentes s'intègrent parfaitement dans vos espaces immobiliers, alliant discrétion et sophistication. 
            Grâce à une technologie avancée, elles trient automatiquement les déchets, offrant une solution intelligente et durable 
            qui valorise vos propriétés.
          </p>
          <p>En choisissant GNOV Smart Bins, vous ajoutez de la valeur à vos propriétés en montrant une approche innovante et durable 
              de la gestion des déchets. Nos solutions sont adaptables pour s'aligner parfaitement avec le caractère unique de vos 
              développements immobiliers. 
          </p>
          <p>Avec notre système d'analytique intelligent, vous gagnez des perspectives approfondies sur les habitudes de déchets,
              optimisez les services de collecte, et maintenez la propreté impeccable de vos espaces. 
          </p>
          <p>Contactez-nous dès aujourd'hui pour discuter de la façon dont GNOV Smart Bins peut transformer la gestion des déchets 
              dans vos projets immobiliers. Redéfinissez l'expérience immobilière avec une gestion des déchets qui combine esthétique et 
              durabilité grâce à GNOV Smart Bins.
          </p>
      </div>
      <div>
            <a class="c-btn c-btn--header" data-scroll href="{{ route('contact') }}" aria-label="Subscribe">Conactez-nous</a>
        </div>
    </div>
  </div>
  </div>

  <div id="foire" class="section-secteur sectionplay">
  <div class="secteur_con">
      <div class="image-container">
          <img src="{{ asset('images/Safex.jpg') }}" alt="Image">
          <img src="{{ asset('images/GBIN.jpg') }}" alt="Image">
      </div>
      <div class="flex--container">
        <div class="text-container">
          <h2>Les Foires</h2>
          <hr>
          <p>
            GNOV offre une solution novatrice pour révolutionner la gestion des déchets lors d'événements tels que les foires et les salons. 
            Grâce à notre technologie de pointe de tri sélectif automatique et à la possibilité de valoriser les déchets sur place, 
            nous garantissons une gestion efficace tout en réduisant les coûts et en maximisant l'impact environnemental positif. 
            Les organisateurs bénéficient d'une gestion simplifiée, renforcent leur image écologique et ouvrent des opportunités 
            commerciales en attirant un public sensible à l'environnement. Profitez d'une offre spéciale en tant qu'organisateur 
            de foires et de salons et transformez votre prochain événement en une vitrine de l'innovation durable avec GNOV ! 
            Contactez-nous dès maintenant pour personnaliser notre solution selon vos besoins spécifiques.
          </p>
        </div>
      <div>
            <a class="c-btn c-btn--header" data-scroll href="{{ route('contact') }}" aria-label="Subscribe">Conactez-nous</a>
      </div>
      </div>
  </div>
  </div>
  <div id="centres" class="section-secteur sectionplay">
    <div class="secteur_con">
        <div class="image-container">
            <img src="{{ asset('images/photo1709419709.jpeg') }}" alt="Image">
            <img src="{{ asset('images/GBIN.jpg') }}" alt="Image">
        </div>
        <div class="flex--container">
        <div class="text-container">
            <h2>Les Centres Commerciaux</h2>
            <hr>
          <p>GNOV Smart Bins révolutionne la gestion des déchets pour les centres commerciaux, offrant une solution intelligente 
            et durable pour transformer les déchets en opportunités lucratives.</p>
          <p>Avec notre technologie de pointe, les poubelles intelligentes GNOV trient automatiquement les déchets, 
            permettant un recyclage efficace et responsable. En louant nos poubelles intelligentes, les centres commerciaux peuvent générer 
            des revenus tout en encourageant une communauté durable.</p>
          <p>En choisissant GNOV Smart Bins, vous montrez votre engagement envers la durabilité et la responsabilité environnementale, 
            tout en économisant du temps grâce à notre système numérique de suivi en temps réel.</p>
          <p>Contactez-nous dès aujourd'hui pour une démo gratuite et découvrez comment GNOV Smart Bins peut transformer votre 
            centre commercial en un modèle de durabilité et d'efficacité. Transformons ensemble vos déchets en opportunités lucratives avec GNOV Smart Bins.</p>
        </div>
        <div>
            <a class="c-btn c-btn--header" data-scroll href="{{ route('contact') }}" aria-label="Subscribe">Conactez-nous</a>
      </div>
      </div>
  </div>
  </div>
  <div id="hopitaux" class="section-secteur sectionplay">
  <div class="secteur_con">
      <div class="image-container">
          <img src="{{ asset('images/hospital.jpg') }}" alt="Image">
          <img src="{{ asset('images/GBIN.jpg') }}" alt="Image">
      </div>
      <div class="flex--container">
        <div class="text-container">
            <h2>Les Hopitaux</h2>
            <hr>
            <p>GNOV Smart Bins propose une avancée révolutionnaire dans la gestion des déchets pour les hôpitaux, 
            alliant simplicité sophistiquée et technologie avancée pour un impact durable.</p>
            <p>Nos poubelles intelligentes s'intègrent harmonieusement dans l'environnement hospitalier, offrant une solution discrète
              et efficace pour gérer les déchets médicaux avec précision et sécurité.</p>
            <p>En choisissant GNOV Smart Bins, vous renforcez votre engagement envers la santé publique et la durabilité environnementale, 
            tout en maximisant l'efficacité de votre équipe grâce à une gestion optimisée des déchets.</p>
            <p>Contactez-nous dès aujourd'hui pour une consultation personnalisée et découvrez comment GNOV Smart Bins peut apporter 
            une touche d'élégance à la gestion des déchets dans votre hôpital, transformant la gestion des déchets médicaux en une 
            œuvre d'art écologique. </p>
        </div>
        <div>
            <a class="c-btn c-btn--header" data-scroll href="{{ route('contact') }}" aria-label="Subscribe">Conactez-nous</a>
        </div>
      </div>
  </div>
  </div>

</section>
<!-- end secteur -->

<!-- about section -->
<section class="about_section layout_padding">
  <div class="container  ">
    <div class="section__header">
      <h2 class="section__title">Qui Somme Nous ?</h2>
    </div>
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="images/gnov5.png" alt="" width="62%">
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
<!-- <section class="team_section layout_padding">
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
              <img src="images/team1.png" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Boufroune Walid
              </h5>
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
              <img src="images/team2.jpg" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Boulsane Zakaria
              </h5>
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
              <img src="images/team3.jpg" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Diguer Imane
              </h5>
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
</section> -->
<!-- end team section -->

@endsection