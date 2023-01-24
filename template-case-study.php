<?php
/**
 * Template Name: Signa 2017 Case Study Page Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

<div class="case-study-banner banner">
  <div class="banner-service-filter"></div>
  <div class="container">
    <div class="row">
      <header class="entry-header service-intro">
        <?php the_title( '<h1 class="entry-title case-study-heading">', '</h1>' ); ?> 
      </header>
    </div>
  </div>
</div>

<!-- #service-banner -->
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'service' );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop. ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php if (is_page(array( 5, 7, 9, 62 ) )) {
  get_template_part('template-parts/testimonials', 'testimonials' );
} ?>

<div class="lead-form-wrapper">
  <h2>Work With Us</h2>
  <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
</div>

<?php get_footer(); ?>