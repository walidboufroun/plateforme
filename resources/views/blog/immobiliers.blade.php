@extends("blog/layouts.layout")

@section("title", "Secteur")

@section("content")
<!-- secteur section -->
<!doctype html>
<html lang="EN">

<

<body>
  <div id="main" aria-label="content">
    <header class="section section--header">
      <div class="section__inner-wrapper">
        <div class="header">
          
          <div class="header__intro">
            <h1 class="header__title">Permettez-nous de vous aider à trouver la meilleure gestion des déchets</h1>
            <p class="header__text"> </p>
            <a class="c-btn c-btn--header" data-scroll href="#subscribe" aria-label="Subscribe">Conactez-nous</a>
          </div>
          <a class="c-link c-link--header" data-scroll href="#feature" aria-label="Go to Feature">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="17" fill="none">
              <path stroke="#fff" d="M6.5 0v16m0 0L1 10.6M6.5 16l5.5-5.4" /></svg>
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
              RSE : En intégrant les principes de la RSE dans notre activité, nous nous engageons à gérer les déchets de manière durable, éthique et responsable.
              </p>
            </div>
            <div class="c-benefits__item">
              <div class="c-benefits__icon">
                <img src="{{ asset('images/shield.png') }}" width="49" height="51" fill="none">
              </div>
              <p class="c-benefits__note">
              HSE : Notre engagement en matière de santé, sécurité et environnement est fondamental dans notre approche de gestion des déchets.
              </p>
            </div>
            <div class="c-benefits__item">
              <div class="c-benefits__icon">
                <img src="{{ asset('images/economique.png') }}" width="49" height="47" fill="none">
                  <path fill="#000" fill-rule="evenodd" d="M26.5 46.8H14.3v-13a4 4 0 0 0 2.7-2.2c4.4 1.7 7.4-4.9 3.7-7.5 2-2.4.5-5.8-2.5-5.4-1.4-5-8.4-5-9.9 0-2.8-.5-4.4 2.6-2.8 4.9-3.4 3-.2 8.6 3.8 7.4a4.2 4.2 0 0 0 3 2.8v13H8.2V36.4c-.7-.5-1.2-1.1-1.1-1.1C3 34.7 0 30.8 0 26.7c0-1.3.3-2.5.8-3.7-.6-3.5 1.4-7.1 4.8-8.3a9.3 9.3 0 0 1 7.3-4L24.5 0 49 22.6l-2.7 3.2L24.5 5.7l-6.7 6.2a9 9 0 0 1 1.7 1.2l5-4.6c2.2 2.2 4.5 4.3 6.9 6.4l4.6 4.2 6.9 6.4v21.3H30.6V36h-4v10.6zm-4-12a7.7 7.7 0 0 1-4.1 1.3v6.4h4v-7.6zm2.8-3h9.4v10.7h4V27.4L24.5 14.2l-1.6 1.5a7.4 7.4 0 0 1 2.7 7.7 8.9 8.9 0 0 1-.2 8.5zm-12.1-7.7c3-2.2 6.6 1.6 4.7 4.7 0-3.1-1.8-4.9-4.7-4.7zm-4.3 2.5c-2.6-4 2-8.9 5.9-6.2-3.9 0-6 2.3-6 6.2z"
                    clip-rule="evenodd" /></svg>
              </div>
              <p class="c-benefits__note">
                Aspect économique : Notre approche de la gestion des déchets intègre des considérations économiques essentielles.
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
            <div class="c-featured-listing__card carousel-cell" style="display:none;">
              <div class="c-featured-listing__wrap">
                <div class="c-featured-listing__row">
                  <h4 class="c-featured-listing__title">Localisation</h4>
                  <p class="c-featured-listing__text">Localisation De Point D'élimination.</p>
                </div>
              </div>
            </div>
            <div class="c-featured-listing__card carousel-cell">
              <div class="c-featured-listing__wrap">
                <div class="c-featured-listing__row">
                  <h4 class="c-featured-listing__title">Localisation</h4>
                  <p class="c-featured-listing__text">Localisation De Point D'élimination.</p>
                </div>
              </div>
            </div>
            <div class="c-featured-listing__card carousel-cell" style="display:none;">
              <div class="c-featured-listing__wrap">
                <div class="c-featured-listing__row">
                  <h4 class="c-featured-listing__title">Localisation</h4>
                  <p class="c-featured-listing__text">Localisation De Point D'élimination.</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
    </main>

  </div>
  <div class="dialog c-modal c-modal--success" id="success-modal">
    <div class="dialog-overlay" tabindex="-1" data-a11y-dialog-hide></div>
    <dialog class="c-modal__content" aria-labelledby="Success
                modal" aria-describedby="User can subscribe dazzlepages website updates with
                an email by subscribe modal">
      <div class="c-modal__wrapper">
        <div class="c-modal__ckeckmark">
          <svg xmlns="http://www.w3.org/2000/svg" width="44" height="32" fill="none">
            <path stroke="#000" stroke-width="4" d="M2 17.1l12.3 12L42 2" /></svg>
        </div>
        <h1 class="c-modal__title-head" id="dialogTitle">Thank you</h1>
        <p class="c-modal__note" id="dialogDescription">You’ve sucessfully subscribed.</p>
        <button data-a11y-dialog-hide class="c-btn c-register-form--btn" type="submit">OK</button>
      </div>
    </dialog>
  </div>
  <script src="scripts/vendor.min.js"></script>

  <script src="scripts/main.min.js"></script>
  <script>
    var scroll = new SmoothScroll('a[href*="#"]', {
      offset: 0,
      updateURL: false
    });
  </script>
</body>

</html>

<!-- end secteur section -->
@endsection