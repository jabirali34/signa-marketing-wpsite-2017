<?php
/**
 * Template Name: Signa 2017 Digital Marketing Template
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

      <div class="f-content-container main-container">
        <h2 class="service-title  digital-marketing-title">Our Capabilities</h2>
        
        <div class="cap-container">

            <!-- Repeater -->
            <?php
              while(have_rows('capabilities_section')): the_row();

              $cap_icon = get_sub_field('cap_icon');
              $url = $cap_icon['url'];
              $alt = $cap_icon['alt'];
            ?>
              <div class="cap-col">
                <div class="cap-box">
                  <?php echo '<img src="'.$url.'" alt="'.$alt.'" >'; ?>
                  <h3><?php echo the_sub_field('cap_name'); ?></h3>
                  <p><?php echo the_sub_field('cap_desc'); ?></p>
                  <a class="btn green small inverse" href="<?php echo get_sub_field('cap_link'); ?>">Learn More</a>
                </div>
              </div>
            <?php 
              
              endwhile; 
            ?>

        </div>
      </div>
        
    </main><!-- #main -->
  </div><!-- #primary -->
  
  <?php get_template_part('template-parts/content', 'testimonial-overlap-display' ); ?>

  <?php get_template_part('template-parts/content', 'contact-form-blue' ); ?>

  <?php get_template_part('template-parts/content', 'featured-blog-podcast' ); ?>

  



<?php get_footer(); ?>