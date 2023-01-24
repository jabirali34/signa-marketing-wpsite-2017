<?php
/**
 *
 * Template Name: Signa 2017 UpCity Page Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>
<div class="service-banner banner">
  <div class="banner-service-filter"></div>
  <div class="banner-service-content-wrapper">
    <div class="container container-upcity">
      <div class="row">
        <header id="upcity-header" class="entry-header service-intro">
          <?php the_title( '<h1 class="entry-title service-heading">', '</h1>' ); ?>

          
        </header>

        <div class="video-container">
          <div style="width: 970px; max-width: 90%; margin: auto;">
            <div id="upcity-video">
              <iframe src="https://www.youtube.com/embed/LRciBfZ7PGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
          <div style="width:100% !important; clear:both; display:block;">
            <p class="button-top-space-1" style="margin-bottom: 50px; margin-top: 30px;">
              <a class="btn-white" style="display:inline-block;" href="/strategy-call/">Request Strategy Call</a>
            </p>
          </div>
        </div>
        
      </div>
    </div>
  </div><!-- #banner-service-content-wrapper -->
</div><!-- #service-banner -->

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div id="upcity-client-case-study">
      <div id="upcity-client-case-study-container">
        <a href="/case-studies/clear-touch-pool-services/" alt="link to clear touch pool services logo"><img src="/wp-content/uploads/2018/05/cleartouch-logo-1.png"
            alt="clear touch pool services logo"></a>
        <a href="/case-studies/woodlees/"><img src="/wp-content/uploads/2018/01/woodlees-logo-header.png" alt="woodlees logo"></a>
        <a href="/case-studies/mug-mens-ultimate-grooming/" alt="link to Men's ultimate grooming case study"><img src="/wp-content/uploads/2018/01/logo.png"
            alt="men's ultimate grooming logo"></a>
        <a href="/case-studies/stone-man-climbing-company/" alt="link to stone man climbing case study"><img src="/wp-content/uploads/logo-2015.png"
            alt="stoneman climbing logo"></a>
      </div>
    </div>

    <div id="upcity-review-row" style="background-image:url('/wp-content/uploads/upcity-bg.jpg'); background-size: cover; ">
      <div id="upcity-review-container" style="width:80%; max-width:1400px;">
        
        <div id="review-item">
          <a href="https://upcity.com/local-marketing-agencies/lists/top-digital-marketing-agencies-in-phoenix" target="_blank"
            rel="nofollow" alt="upcity top digital marketing agency" title="top digital marketing agency">
            <img src="/wp-content/uploads/digital-marketing-certified-min.png">
          </a>
        </div>

        <div id="review-item">
          <a href="https://clutch.co/profile/signa-marketing" target="_blank" rel="nofollow" alt="clutch top digital marketing agency"
            title="clutch">
            <img src="/wp-content/uploads/clutch-badge.png">
          </a>
        </div>
        
        <div id="review-item">
          <img src="/wp-content/uploads/Bing_Partner_Badge_Teal.jpg">
        </div>

        <div id="review-item">
          <a href="https://www.bark.com/en/company/signa-marketing/4X07g/" target="_blank" rel="nofollow" alt="Bark.com Professional - Signa Marketing"
            title="Bark.com Professional Signa Marketing">
            <img src="/wp-content/uploads/bark-badge.jpg">
          </a>
        </div>
        
        <div style="width:100% !important; clear:both; display:block;">
          <p class="button-top-space-1" style="margin-bottom: 10px; margin-top: 70px;">
            <a class="btn-white" href="/strategy-call/" style="display:inline-block;">Request Strategy Call</a>
          </p>
        </div>
      </div>
    </div>

    <!-- Services -->
    <?php get_template_part('template-parts/content-services-section', 'content-services-section' ); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_template_part('template-parts/testimonials', 'testimonials' ); ?>
<script type="text/javascript" src="/wp-content/uploads/js/testimonials.js" defer></script>

<div class="lead-form-wrapper">
  <h2>Work With Us</h2>
  <div class="lead-form">
    <?php gravity_form( 3, false, false, false, '', false ); ?>
  </div>
</div>
<div id="recent-posts-widgets">
  <div id="recent-posts">
    <h2 class="tx-center">Tips & Insights Blog</h2>
    <?php $postslist = get_posts('numberposts=3&order=DESC'); foreach ($postslist as $post) : setup_postdata($post); ?>
    <div class="recent-post-thumbnail">
      <?php if ( has_post_thumbnail()) : ?>
      <a title="" href=' <?php the_permalink(); ?>'>
        <?php the_post_thumbnail(); ?> </a>
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
  <!-- End Recent Posts -->
</div>

<?php get_footer(); ?>