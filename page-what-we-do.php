<?php
/**
 * Template Name: Signa 2017 What we do page Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

<?php get_template_part('template-parts/content-hero', 'content-hero' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <!-- Intro Section -->
    <?php get_template_part('template-parts/content-intro', 'content-intro' ); ?>

    <!-- What we do page modal -->
    <div id="lightbox-form" class="lightbox-noshow lead-form-wrapper">
      <span id="close-lightbox-form" onclick="closeModal()" style="cursor: pointer;">
        <img src="/wp-content/themes/signa-2017/images/icons/times-regular.svg" aria-hidden="true" width="32">
      </span>
      <?php gravity_form( 9, true, false ); ?>
    </div>

    <!-- Services -->
    <?php get_template_part('template-parts/content-services-section', 'content-services-section' ); ?>

    <!-- Testimonials Slider -->
    <?php get_template_part('template-parts/testimonials', 'testimonials' ); ?>

    <!-- Lead Form -->
    <div class="lead-form-wrapper">
      <h2>Work With Us</h2>
      <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
    </div>
      
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>