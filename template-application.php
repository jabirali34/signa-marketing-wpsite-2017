<?php
/**
 * Template Name: Job Application Form Template
 *
 * @package Signa_2017
 */
get_header(); 

  if ( has_post_thumbnail() ) {
    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
    $featured_image = $featured_image[0];
  } else {
    $featured_image = false;
  }

  //previous page slug 
  $prev_slug = $_GET['job'];

  //clean job title 
  $clean_job_title = str_replace("-", " ", $prev_slug);

?>

  <!-- Hero Section -->
  <div class="service-banner banner" <?php if(has_post_thumbnail()) { echo 'style="background-image: url('. $featured_image .');"'; } ?>>
    <div class="banner-service-filter"></div>
    <div class="banner-service-content-wrapper">
      <div class="container">
        <div class="row">
          <header class="entry-header service-intro" data-aos="fade-up" style="padding-bottom: 75px;">

            <h1 class="entry-title service-heading"><?php echo $clean_job_title; ?> Application</h1>

            <!-- Breadcrumbs -->
            <div>
            <?php
              if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
              }
            ?>
            </div>

          </header>
        </div>
      </div>
    </div><!-- #banner-service-content-wrapper -->
  </div><!-- #service-banner -->

  <!-- Page Content -->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="f-content-row">
        <div class="f-content-container" style="max-width: 900px;">
            
          <div class="f-content-row">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
        
    </main><!-- #main -->
  </div><!-- #primary -->

<?php 
get_footer();