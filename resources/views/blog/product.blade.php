@extends("blog/layouts.layout")

@section("title", "Products")

@section("content")
<section class="service_section layout_padding">
  <div class="service_container">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          Nos <span>Solutions</span> Dans La Gestion Des Déchets
        </h2>
        <p>
          Les Solutions disponibles dans notre Startup :
        </p>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-4 col-sm-6 ">
          <div class="box" data-target="01">
            <div class="img-box">
              <img src="{{ asset('images/prod.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                G-BIN
              </h5>
              <p>
                Une poubelle intelligente qui fait le tri sélectif automatiquement avec numérisation des données 
                contient 5 bacs internes (Plastique, Metal, Papier, Verre, Autres)
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <div class="box" data-target="02">
            <div class="img-box">
              <img src="{{ asset('images/prod.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                S-BIN
              </h5>
              <p>
                Une poubelle intelligente qui fait le tri sélectif automatiquement avec numérisation des données 
                contient 3 bacs internes (Plastique, Papier, Autres)
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <div class="box" data-target="03">
            <div class="img-box">
              <img src="{{ asset('images/prod.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                KIT-BIN
              </h5>
              <p>
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="01" class="hidden unhidden">
  
</div>
<div id="02" class="hidden unhidden">
  
</div>
<div id="03" class="hidden unhidden">
  
</div>
@endsection