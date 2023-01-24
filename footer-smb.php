<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Signa_2017
 */
?>



</div><!-- #content -->

<footer>
  <!-- Footer content -->
  <section class="bg-dkblue padding-medium">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-8">
          <?php $footer = get_field('footer_section'); ?>
          <p class="footer-append"><?php echo $footer['footer_append_title']; ?></p>
          <h3 class="footer-title"><?php echo $footer['footer_title']; ?></h3>
          <a class="btn btn-footer" href="<?php echo $footer['footer_button_url']; ?>"><?php echo $footer['footer_button_text']; ?></a>
        </div>
      </div>

      <hr style="border-color: #fff;">

      <div class="row text-center justify-content-center">
        <div class="col-12">
          <div class="sub-footer">

            <!-- logo -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img class="footer-logo" src="/wp-content/uploads/2016/11/logo@2x.png" width="180" alt="Signa Marketing Logo">
            </a>

            <!-- copyright -->
            <p class="xsm">&copy; <?php echo date("Y"); ?> Signa Marketing LLC.</p>
            <p class="xsm">All Rights Reserved | Strengthening the Connection Between Brand and Consumer</p>
            <br>
            <p class="xsm"><a href="/privacy-and-cookie-policy" target="_block" style="color:#fff;">Privacy Policy</a></p>

          </div>
        </div>
      </div>
    </div>
  </section>
  
  
</footer>


</div><!-- #page -->

<!-- JS Lib -->
<script src="https://unpkg.com/aos@next/dist/aos.js" defer></script>

<!-- bLazy -->
<script src="https://cdn.jsdelivr.net/blazy/latest/blazy.min.js/"></script>
<script>
	;(function() {
		// Initialize
		var bLazy = new Blazy();
	})();
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>