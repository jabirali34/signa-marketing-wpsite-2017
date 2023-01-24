<?php
/**
 * The template for displaying all single case study posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Signa_2017
 */
get_header(); ?>

<?php 
      if ( has_post_thumbnail() ) {
        $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
        $featured_image = $featured_image[0];
      } else {
        $featured_image = false;
      }
    ?>


<div class="service-banner banner" <?php if(has_post_thumbnail()) { echo 'style="background-image: url('. $featured_image .');"'; } ?>>
      <div class="banner-service-filter"></div>
      <div class="banner-service-content-wrapper">
        <div class="container">
          <div class="row">
            <header class="cs-hero" data-aos="fade-up">

              <h1 class="entry-title service-heading"><?php the_title(); ?></h1>

              <!-- Breadcrumbs -->
              <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
              ?>
              
            </header>
          </div>
        </div>
      </div><!-- #banner-service-content-wrapper -->
    </div><!-- #service-banner -->

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="" class=" page type-page status-publish hentry">
            <div class="entry-content">
              <div class="f-content-row">

                <div class="f-content-container">
                  <div class="f-content-row" style="align-items: center;">

                    <div class="f-col-50 fo2 ftm-35">
                      <h2 class="cs-title"><?php echo the_field('project_headline'); ?></h2>
                      <p><?php echo the_field('project_description'); ?></p>
                      <h4 class="text-spacer">Services Completed</h4>

                      <?php 
                      // Display services completed
                      // vars
                      $services_checked = get_field('project_services');
                      
                      if($services_checked): ?>
                        <ul class="cs-service-completed">
                          <?php foreach( $services_checked as $service ): ?>
                            <li><?php echo $service; ?></li>
                          <?php endforeach; ?>
                        </ul>
                      <?php endif; ?>

                    </div>

                    <div class="f-col-50 f-p-l fo1 no-m-b">
                      <img src="<?php echo the_field('project_image'); ?>" alt="<?php the_title(); ?>">
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </article>

        <?php endwhile; // End of the loop. ?>
      </main><!-- #main -->
    </div><!-- #primary -->

    <?php if (is_page(array( 5, 7, 9, 62 ) )) {
      get_template_part('template-parts/testimonials', 'testimonials' );
    } ?>
  

<?php get_footer(); ?>