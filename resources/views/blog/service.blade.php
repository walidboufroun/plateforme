@extends("blog/layouts.layout")

@section("title", "Services")

@section("content")
  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Nos <span>Services</span> Dans La Gestion Des Déchets
          </h2>
          <p>
            Nombreux services sont disponibles dans notre gestion de déchets, mais la majorité sont :
          </p>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/serv1.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Automatisation
                </h5>
                <p>
                  Nos poubelles intelligentes ont la capacité de trier, compacter automatiquement les déchets et de collecter les données en temps. Ce niveau d'automatisation peut améliorer considérablement l'efficience et l'efficacité des pratiques de gestion des déchets.
                </p>
                <!-- <a href="">
                  Read More
                </a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/serv2.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Numérisation
                </h5>
                <p>
                  La numérisation fait référence au processus de collecte, de stockage et d’analyse des données liées à la gestion des déchets dans un format numérique
                </p>
                <!-- <a href="">
                  Read More
                </a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/serv3.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Valorisation
                </h5>
                <p>
                  Notre objectif est de réduire l'impact environnemental de l'élimination des déchets, de conserver les ressources et potentiellement de générer des revenus ou des économies en transformant les déchets en ressources ou produits de valeur.
                </p>
                <!-- <a href="">
                  Read More
                </a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('images/serv4.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Green Environment
                </h5>
                <p>
                  En réduisant la pollution environnementale et en favorisant une utilisation plus efficace des ressources, nous travaillons ensemble pour créer un avenir plus durable et plus propre.                </p>
                <!-- <a href="">
                  Read More
                </a> -->
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="btn-box">
          <a href="">
            View All
          </a>
        </div> -->
      </div>
    </div>
  </section>

  <!-- end service section -->


<!-- product section -->

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
        <div class="col-md-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('images/prod.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                G-BIN
              </h5>
              <p>
                Une poubelle intelligente qui fait le tri séletif automatiquement avec numérisation des données 
                contient 5 bacs internes (Plastique, Metal, Papier, Verre, Autres)
              </p>
              <!-- <a href="">
                Read More
              </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('images/prod.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                S-BIN
              </h5>
              <p>
                Une poubelle intelligente qui fait le tri séletif automatiquement avec numérisation des données 
                contient 3 bacs internes (Plastique, Papier, Autres)
              </p>
              <!-- <a href="">
                Read More
              </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('images/prod.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                KIT-BIN
              </h5>
              <p>

              </p>
              <!-- <a href="">
                Read More
              </a> -->
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="btn-box">
        <a href="">
          View All
        </a>
      </div> -->
    </div>
  </div>
</section>

<!-- end product section -->

@endsection