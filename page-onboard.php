<?php
/**
 *
 * Template Name: Client Onboard Form Template
 * 
 * page should be no-index 
 * page url: /onboard-form
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header('none');

?>

<!-- Hero -->
<div class="service-banner banner">
  <div class="banner-service-filter"></div>
  <div class="banner-service-content-wrapper">
    <div class="container">
      <div class="row">
        <header class="entry-header service-intro">
          <?php the_title( '<h1 class="entry-title service-heading">', '</h1>' ); ?></header>
      </div>
    </div>
  </div>
</div>

<!-- Content -->
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    <div class="entry-content">

        <div class="f-cotnent-row">
          <div class="f-content-container">

          <?php 
              if(is_user_logged_in()) {
                gravity_form( 16, false, false, false, null, false, true );
                gravity_form_enqueue_scripts( 16, false );
              } else {
                echo '<h2 class="login-form-header">Login to Continue</h2>';
                $onboard_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $args = array(
                  'redirect' => $onboard_link,
                );
                wp_login_form($args);
              }
            ?>

          </div>
        </div>        

      </div>
    </article>

  </main><!-- #main -->
</div><!-- #primary -->

<?php 
get_footer('none');