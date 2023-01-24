<?php
/**
 *
 * Template Name: Contact Form Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */

get_header(); ?>

  <?php get_template_part('template-parts/content-hero', 'content-hero' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">

          <div class="contact-container">
            <div class="contact-row">

              <div class="contact-col">
                <?php $contact_info = get_field('contact_info'); ?>
                <h3>Contact Info</h3>
                <p><strong>Phone:</strong> <a href="tel:602-456-2906"><?php echo $contact_info['contact_phone']; ?></a></p>
                <p><strong>Location:</strong> <?php echo $contact_info['contact_location']; ?></p>
                <p><strong>Email:</strong> <a href="mailto:<?php echo $contact_info['contact_email']; ?>"><?php echo $contact_info['contact_email']; ?></a></p>
              </div>

              <div class="contact-col">
                <h3>Support</h3>
                <p><strong>Email:</strong> <a href="mailto:<?php echo get_field('support_email'); ?>"><?php echo get_field('support_email'); ?></a></p>
              </div>

              <div class="contact-col">
                <h3>Press</h3>
                <p><strong>Email:</strong> <a href="mailto:<?php echo get_field('press_email'); ?>"><?php echo get_field('press_email'); ?></a></p>
              </div>

            </div>
          </div>

          <?php //the_content(); ?>

          <!-- Google Map Image Container -->
          <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=1201%20E%20Jefferson%20St&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:450px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:100%;}</style></div>
          

        </div>    
      </article>
      
      <div class="contact-form-wrapper lead-form-wrapper">
        <div class=""><?php gravity_form( 2, false, false, false, '', false ); ?></div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();


