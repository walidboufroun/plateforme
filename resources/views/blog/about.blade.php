@extends("blog/layouts.layout")

@section("title", "About")

@section("content")
<!-- about section -->
<section class="about_section layout_padding">
  <div class="container  ">
    <div class="heading_container heading_center">
      <h2>
        Qui somme <span> nous</span> ?
      </h2>
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
@endsection