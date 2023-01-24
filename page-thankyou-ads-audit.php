<?php
/**
 * Template Name: Thank you - Google Ads Audit
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
        <header class="entry-header service-intro" data-aos="fade-up" style="padding-bottom: 75px;">

          <h1 class="entry-title service-heading">Thank You</h1>

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

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <!-- Thank you section -->
    <div class="f-content-container" style="padding-bottom: 0px !important;">
      <p class="value"><?php echo get_field('thank_you_message'); ?></p>
    </div>

    <!-- Recent Posts -->
    <div id="recent-posts-widgets">
      <div id="recent-posts">
        <h2 class="tx-center">Tips &amp; Insights Blog</h2>
        <?php 
          $postslist = get_posts('numberposts=3&order=DESC'); foreach ($postslist as $post) : setup_postdata($post); 

          if ( has_post_thumbnail() ) {
            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
            $featured_image = $featured_image[0];
          } else {
            $featured_image = false;
          }
        ?>
        <div class="recent-post-thumbnail" data-aos="fade-up">
          <?php if ( has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
              <img class="b-lazy" data-src="<?php echo $featured_image; ?>" alt="<?php the_title(); ?>">
            </a>
          <?php endif; ?>
          <span class="recent-posts-date">
            <?php the_time('F j, Y') ?>
          </span>
          <a class="recent-posts-title" title='Post: <?php the_title(); ?>' href='<?php the_permalink(); ?>'>
            <?php the_title(); ?>
          </a>
        </div>
        <?php endforeach; ?>
        <div class="view-our-blog-btn">
          <a class="green-learn-button" href="/blog/">View Our Blog</a>
        </div>
      </div>
    </div>
      
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>