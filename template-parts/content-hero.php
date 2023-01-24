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
        <header class="entry-header service-intro" data-aos="fade-up" style="padding-bottom: 75px;">

          <!-- Page Title -->
          <?php if(get_field('hero_title')): ?>
            <h1 class="entry-title service-heading"><?php echo get_field('hero_title'); ?></h1>
          <?php else: ?>
            <?php the_title( '<h1 class="entry-title service-heading">', '</h1>' ); ?>
          <?php endif; ?>

          <!-- Subtext -->
          <?php if(get_field('introduction_text')): ?>
            <p><?php echo get_field('introduction_text'); ?></p>
          <?php endif; ?>

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