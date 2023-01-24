<?php

/**
 * Template Name: NEW FRONT PAGE TEST
 * 
 */
get_header('home'); ?>

<div class="content-home content-default content-default-home">

  <div class="home-banner banner">

    <!-- Filter -->
    <div class="banner-video-filter"></div>

    <!-- Desktop Video -->
    <div class="banner-video">
      <div class="homepage-video-container">
        <?php if (!is_mobile_device()) : ?>
          <video muted autoplay loop class="homepage-video">
            <source src="/video/Signa-Homepage-Video.mp4" type="video/mp4">
          </video>
        <?php endif; ?>
      </div>
    </div>

    <!-- Hero Text -->
    <div class="banner-content-wrapper">
      <div class="f-content-container intro">
        <h1 class="home-heading amp-font-of-title">Strengthening the
          <span>Connection</span> Between
          <span>Brand and Consumer</span>
        </h1>
      </div>
    </div>

    <!-- Anchor Hero Link -->
    <a id="goto-anchor" href="#goto-anchor" class="goto-anchor">
      <img src="/wp-content/themes/signa-2017/images/icons/angle-double-down-solid.svg" aria-hidden="true" width="25">
    </a>
  </div><!-- .home-banner .banner -->

  <!-- Intro Section -->
  <div class="f-content-container">
    <h2 class="heading mb-1">What We Do</h2>
    <p class="value contain-large-text">We strive to make each aspect of marketing a business online clear and understandable, as well as give our clients the digital insights needed to succeed in their market space</p>
  </div>

  <div class="services-outer-wrapper">
    <div class="f-content-container f-col-50 mobile-custom-col flexed">
      <div class="service-item">
        <h2 class="service-title">DIGITAL<br>MARKETING</h2>
        <p>Paid Media Advertising</p>
        <p>Search Engine Optimization</p>
        <p>Content Marketing</p>
        <a href="/digital-marketing/" class="btn blue inverse blue-learn-button services-list">Learn More</a>
      </div>
      <div class="service-item">
        <h2 class="service-title">SMALL<br>BUSINESS</h2>
        <p>Paid Search Advertising</p>
        <p>Paid Social Advertising</p>
        <p>Local SEO</p>
        <a href="/small-business/" class="btn blue inverse blue-learn-button services-list">Learn More</a>
      </div>
      <div class="service-item">
        <h2 class="service-title">MEDIA &<br>BRANDING</h2>
        <p>Media/Video Production</p>
        <p>Podcast Production</p>
        <p>Brand Identity</p>
        <a href="/media/" class="btn blue inverse blue-learn-button services-list">Learn More</a>
      </div>

    </div>
  </div>

  <div class="new-home-services">
    <div class="f-content-container">
      <h2 class="heading mb-1 trusted-by">Trusted By</h2>
      <div class="awards-row trusted-logos">
        <img src="/wp-content/themes/signa-2017/images/logos/WOODLEES_logo_Updated_Black-min.png" alt="Trusting Client Woodlee's">
        <img class="planned-parenthood-logo" src="/wp-content/themes/signa-2017/images/logos/planned-parenthood-horizontal.png" alt="Trusting Client Planned Parenthood Arizona">
        <img src="/wp-content/themes/signa-2017/images/logos/drhesslerlogo-gray-1.png" alt="Trusting Client Dr. Monte Hessler">
      </div>
    </div>

  </div><!-- #new-home-services -->

  <div id="new-case-studies-wrapper" class="new-case-studies-home bg-ltblue">

    <div class="case-study-container">
      <h2>Case Studies</h2>
      <div class="f-col-50.mobile-custom-col.flexed">
        <img class="b-lazy" data-src="/wp-content/themes/signa-2017/images/case-study-stoneman-climbing.jpg" width="370" height="483" alt="Stone Man Climbing Case Study">
        <img class="b-lazy" data-src="/wp-content/themes/signa-2017/images/case-studies-woodlees.jpg" width="370" height="483" alt="">
        <img class="b-lazy hidden-screen-sm" data-src="/wp-content/themes/signa-2017/images/case-studies-iconic-life.jpg" width="370" height="483" alt="">
      </div>
      <a class="btn-white btn medium home-cta-case-study" href="/case-studies/">View Case Studies</a>
    </div>

    <div id="ca-cta-card-container">
      <div id="ca-cta-card">
        <div>
          <h2>Get a Free Competitive Analysis For Your Business</h2>
          <p>See how your business' online presence stacks up against your competitors with our Free Competitive Analysis.</p>
          <a href="/competitive-analysis/" class="btn orange">Schedule Your Analysis Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="f-content-container">
    <h2 class="heading mb-1">AWARD WINNING</h2>
    <div class="awards-row award-winning">
      <img width="200" height="165" src="/wp-content/themes/signa-2017/images/top-rated-seo-agency-signa-marketing.png" alt="Top Rated SEO Agency" loading=lazy>
      <img width="200" height="161" src="/wp-content/themes/signa-2017/images/best-digital-marketing-agencies-in-phoenix.png" alt="Awarded Best Digital Marketing Agency in Phoenix, AZ" loading=lazy>
      <img width="168" height="168" src="/wp-content/themes/signa-2017/images/top-digital-agency-upcity.png" alt="Top Digital Agency on UpCity" loading=lazy>
    </div>
  </div>

  <?php get_template_part('template-parts/content', 'testimonial-overlap-display'); ?>

  <?php get_template_part('template-parts/content', 'contact-form-blue'); ?>

  <?php get_template_part('template-parts/content', 'featured-blog-podcast'); ?>

</div>
<!-- #content content-default content-default-home -->


<?php get_footer(); ?>