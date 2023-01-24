<?php
/**
 *
 * Template Name: Google Ads Audit
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

<?php get_template_part('template-parts/content-hero', 'content-hero' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'service' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
    ?>
  </main><!-- #main -->
</div><!-- #primary -->

<div class="lead-form-wrapper with-h3">
  <h3>Request your Free Google Ads Audit</h3>
  <div class="lead-form"><?php gravity_form( 21, false, false, false, '', false ); ?></div>
</div>

<?php get_footer(); ?>