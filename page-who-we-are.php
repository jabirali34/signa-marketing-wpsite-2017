<?php
/**
 * Template Name: Signa 2017 Who we are Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

  <?php get_template_part('template-parts/content-hero', 'content-hero' ); ?>

  <!-- Page Content -->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="f-content-row">
        <div class="f-content-container">
          <div class="f-content-row">
            
            <div class="f-col-50 tx-center" style="padding:0 30px">
              <?php $section_one = get_field('about_column_1'); ?>
              <h3 class="no-m-t"><?php echo $section_one['about_title']; ?></h3>
              <p class="no-m-b"><?php echo $section_one['about_text']; ?></p>
            </div>

            <div class="f-col-50 tx-center mobile-padding-top" style="padding:0 30px">
              <?php $section_two = get_field('about_column_2'); ?>
              <h3 class="no-m-t"><?php echo $section_two['about_title']; ?></h3>
              <p class="no-m-b"><?php echo $section_two['about_text']; ?></p>
            </div>

          </div>
        </div>
      </div>

      <div class="f-content-row who-we-are-bg">
        <div class="who-we-are-row-filter-bg">
          <div class="f-content-container contain-text">
            <?php $section_three = get_field('about_column_3'); ?>
            <h3 class="white-text no-m-t"><?php echo $section_three['about_title']; ?></h3>
            <p class="white-text tx-center no-m-b no-m-t"><?php echo $section_three['about_text']; ?></p>
          </div>
        </div>
      </div>
        
    </main><!-- #main -->
  </div><!-- #primary -->

  <?php get_template_part('template-parts/testimonials', 'testimonials' ); ?>

  <div class="lead-form-wrapper">
    <h2>Work With Us</h2>
    <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
  </div>

<?php get_footer(); ?>