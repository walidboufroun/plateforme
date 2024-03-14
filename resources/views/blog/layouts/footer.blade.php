 <!-- info section -->

 <section id="footer" class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +213 558629858
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  gnovstartup@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="https://www.facebook.com/gnovstar">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
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
              Notre vision est de vous offrir une solution pratique qui simplifie la gestion de vos déchets tout en stimulant votre entreprise.             </p>
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
              <a class="active" href="{{ route('about') }}">
                Qui somme nous
              </a>
              <a class="" href="{{ route('product') }}">
                Nos Services
              </a>
              <a class="" href="{{ route('why') }}">
                Pourquoi nous
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script type="text/javascript" src="{{ asset('js/new.js') }}"></script>
  <script type="text/javascript" src="js/new.js"></script>

  <script type="text/javascript" src="{{ asset('js/produit.js') }}"></script>
  <script type="text/javascript" src="js/produit.js"></script>

</body>

</html>