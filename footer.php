  <!-- Footer -->
  <section>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="h-100 d-flex flex-column order-5 order-sm-5 mt-3">
                  <div class="footer-title" class="p-2" href="#">Dane kontaktowe</div>
                  <a class="p-2 item" href="#"><img class="header-icon" src="<?php echo get_template_directory_uri(); ?>/icon/facebook_blue_icon.svg">
                    beatrice@facebook.com</a>
                  <a class="p-2 item" href="#"><img class="header-icon" src="<?php echo get_template_directory_uri(); ?>/icon/linkedin_blue_icon.svg">
                    beatrice@linkedin.com</a>
                  <a class="p-2 item" href="#"><img class="header-icon" src="<?php echo get_template_directory_uri(); ?>/icon/telephone_blue_icon.svg">
                    500 500 500</a>
                  <a class="p-2 item" href="#"><img class="header-icon" src="<?php echo get_template_directory_uri(); ?>/icon/email_blue_icon.svg">
                    beatrice@beatrice.com</a>
                </div>
              </div>
              <div class="col-md-12">
                <div class="h-100 d-flex flex-column order-5 order-sm-5 mt-3 mb-3">
                  <div class="footer-title" href="#">Dane adresowe</div>
                  <a class="p-2 item" href="#"><img class="header-icon" src="<?php echo get_template_directory_uri(); ?>/icon/location_blue_icon.svg">
                    Radom | 00-999 | ul. Prosta 1/1 </a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="col-12 col-centered logo-bar">
              <div class="" style="display:flex;justify-content:center;align-items:center;">
                <img class="icon-logo" src="<?php echo get_template_directory_uri(); ?>/icon/beatrice_logo.svg">
              </div>
            </div>
          </div>
        </footer>
      </section>


    <!-- <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/scrollReveal/scrollReveal.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery-1.12.4.js"></script>
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->

    <script type="text/javascript">

      // $(document).ready(function () {
      //   AOS.init({
      //   startEvent: 'load',
      //   easing: 'ease-in-out-quart',
      //   duration: 600,  once: false });
      // });

      //   $(window).on('resize', function () { AOS.refresh(); });
      // $(window).on('load', function() { setTimeout(AOS.refreshHard, 1500); });


    $("#btn_go_to_products").click(function () {
      $([document.documentElement, document.body]).animate({
        scrollTop: $("#section_products").offset().top
      }, 2000);
    });

    $( "a:contains('Produkty')" ).click(function () {
      $([document.documentElement, document.body]).animate({
        scrollTop: $("#section_products").offset().top - 80
      }, 2000);
    });

$( document ).ready(function() {

   var config = {
        reset: false,
        vFactor: 0.0, // requires 10% of an element be visible to trigger animation.
        easing:   'ease-out',
        mobile: true,
        container: 'main'
      }
      window.sr = new scrollReveal(config);
    });
  </script>

    </body>
</html>