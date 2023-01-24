<?php
/**
 *
 * Template Name: Photography Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

<?php get_template_part('template-parts/content-hero', 'content-hero' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">


    <div class="global-row">
      <div class="global-columns-80">
        <img src="/wp-content/uploads/PHOTOGRAPHY_Page-mockup_v2_03.jpg" alt="Photography Services Phoenix" width="100%"
          class="alignnone size-full wp-image-1175">
        &nbsp;
        <p class="tx-center contain-text aligncenter">When it comes to human behavior and how we make decisions, our first impression has a lot
          of impact. There is a lot of power inside an authentic photo that speaks your message, brand and making an
          impactful impression.</p>

        <p class="tx-center contain-text aligncenter">
        Whether it be an object or a capture of a situation taking place, authentic images to be used in your
        advertising campaigns or website can allow people to connect with your message, product or service in a
        meaningful way. By having professionally shot photos of your brand, product, service or team members, you can be
        sure that you will be representing your business in a unique and powerful way.</p>

      </div>
    </div>


  </main><!-- #main -->
</div><!-- #primary -->

<!-- Form CTA -->
<div class="lead-form-wrapper">
  <h2>Work With Us</h2>
  <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
</div>

<?php get_footer(); ?>