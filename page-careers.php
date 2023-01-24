<?php
/**
 * Template Name: Signa 2017 Careers Template
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

          <!-- <?php $about_careers = get_field('about_careers'); ?>
          <p class="tx-center"><?php echo $about_careers['text']; ?></p> -->

          <!-- Job Rows Section -->
          <?php while(have_rows('careers')): the_row(); ?>
          <div class="f-content-row row-jobs">
            <div class="f-col-50">
              <h3 class="job-listing-mobile"><?php echo the_sub_field('job_title'); ?></h3>
            </div>
            <div class="f-col-50">
              <a href="<?php echo the_sub_field('job_link'); ?>" class="blue-learn-button" rel="nofollow" target="_block">View Job</a>
            </div>
          </div>
          <?php endwhile; ?>

        </div>
      </div>
        
    </main><!-- #main -->
  </div><!-- #primary -->

  <div class="lead-form-wrapper">
    <h2>Work With Us</h2>
    <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
  </div>

<?php 
get_footer();