<?php
/**
 *
 * Template Name: Email Marketing Template
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

          <!-- Page Title -->
          <?php if(get_field('hero_title')): ?>
            <h1 class="entry-title service-heading"><?php echo get_field('hero_title'); ?></h1>
          <?php else: ?>
            <?php the_title( '<h1 class="entry-title service-heading">', '</h1>' ); ?>
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

<!-- Intro Section -->
<?php 
  $intro_content = get_field('intro_content');
  if(get_field('intro_content')): 
?>
  <div class="f-content-row">
    <div class="f-content-container tx-center contain-text">
      <?php echo $intro_content['text']; ?>
    </div>
  </div>
<?php endif; ?>

<div class="f-content-row bg-ltblue">
  <div class="f-content-container">
    <div class="f-content-row" style="align-items:center;">

      <div class="f-col-50 fo2 fmt-35">
        <h2>Email Strategy</h2>
        <p>Before employing any high level strategies, your personal account manager will first analyze your business, competitors, audience, and current email marketing strategy (if there was one in place). Once our team understands what is working and what is not, we can move on to develop more optimized campaigns.</p>
      </div>

      <div class="f-col-50 f-p-l fo1 tx-right">
        <img style="max-width: 517px; max-height: 350px; max-width: 100%;" src="/wp-content/uploads/Email-Strategy.jpg" alt="Email Strategy">
      </div>

    </div>
  </div>
</div>

<div class="f-content-row bg-white">
  <div class="f-content-container">
    <div class="f-content-row switch-left" style="align-items:center;">

      <div class="f-col-50 fo2 fmt-35">
        <h2>Managing & Growing Your Email List</h2>
        <p>To grow your reach, not only do we have to generate more subscribers, but we need to ensure the currently subscribed stay active. So we employ industry-proven lead-nurturing, life-cycle, and win-back strategies – just to name a few of our email marketing strategies. Our goal is to create an ever-growing list of active readers/buyers and keep them engaged so that they become loyal customers.</p>
        <p>Check out our other services that can build your email list through optimized sign up processes, blogging, and <a href="/digital-marketing/content-creation">content marketing.</a></p>
      </div>

      <div class="f-col-50 f-p-l fo1">
        <img style="max-width: 517px; max-height: 350px; max-width: 100%;" src="/wp-content/uploads/email-marketing-img2v2.png" alt="Managing and Growing your email list">
      </div>

    </div>
  </div>
</div>

<div class="f-content-row bg-ltblue">
  <div class="f-content-container">
    <div class="f-content-row" style="align-items:center;">

      <div class="f-col-50 fo2 fmt-35">
        <h2>Email Design</h2>
        <p>Whether you want people to sign up, buy, or subscribe, we’ll help make converting easier by designing emails that directly appeal to your customers, maintain your <a href="/creative/brand-identity">brand</a> appearance, and convinces more people to become a paying customer in as few clicks as possible.</p>
      </div>

      <div class="f-col-50 f-p-l fo1 tx-right">
        <img style="max-width: 517px; max-height: 350px; max-width: 100%;" src="/wp-content/uploads/Email_Design.jpg" alt="Email Design">
      </div>

    </div>
  </div>
</div>

<div class="f-content-row bg-white">
  <div class="f-content-container">
    <div class="f-content-row switch-left" style="align-items:center;">

      <div class="f-col-50 fo2 fmt-35">
        <h2>Responsive Design & Split Testing</h2>
        <p>With the growing mobile audience, it’s essential to use responsive design to reorganize and position content to maintain branded messaging and imagery by catering to mobile devices and desktops. Our designs are compatible with all device functionalities and optimized for individual device usage patterns and call to actions are positioned for higher visibility. We also partake in split testing to discover the most appealing verbiage, design, incentive to click, and time to email. By constantly testing designs and improving the user experience, we can maximize your click through rate(s).</p>
      </div>

      <div class="f-col-50 f-p-l fo1">
        <img style="max-width: 517px; max-height: 350px; max-width: 100%;" src="/wp-content/uploads/email-marketing-img4-v2.png" alt="Responsive Design and Split testing">
      </div>

    </div>
  </div>
</div>

<div class="f-content-row bg-ltblue">
  <div class="f-content-container">
    <div class="f-content-row" style="align-items:center;">

      <div class="f-col-50 fo2 fmt-35">
        <h2>Tracking Data & Reporting</h2>
        <p>Once a campaign goes live, it generates trackable data and we use secure analytic tracking software to track campaign progression, inbound metrics, and use custom end of month reports to relay relevant information to you. You can also always speak to an account manager to see how your campaigns are going. We track KPI’s such as open rates, click through rates, and inactive user rates to determine email performance and how anything can be improved. We will dive head first into a massive pool of metrics and interpret all of it so that future optimizations can be more intelligently influenced.</p>
      </div>

      <div class="f-col-50 f-p-l fo1 tx-right">
        <img style="max-width: 517px; max-height: 350px; max-width: 100%;" src="/wp-content/uploads/email-marketing-img6v2.jpg" alt="Tracking Data & Reporting">
      </div>

    </div>
  </div>
</div>

<!-- FORM CTA -->
<div class="lead-form-wrapper">
  <h2>Work With Us</h2>
  <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
</div>

<?php get_footer(); ?>