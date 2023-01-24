<?php
/*
Template Name: New Case Study Template
Template Post Type: case_studies
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
            <header class="cs-hero" data-aos="fade-up">

              <!-- Page Title -->
              <?php if(get_field('hero_title')): ?>
                <h1 class="entry-title service-heading"><?php echo get_field('hero_title'); ?></h1>
              <?php endif; ?>

              <!-- Subtext -->
              <?php if(get_field('hero_subtitle')): ?>
                <p id="amp-font-size"><?php echo get_field('hero_subtitle'); ?></p>
              <?php endif; ?>

              <!-- Breadcrumbs -->
              <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
              ?>
              
            </header>
          </div>
        </div>
      </div><!-- #banner-service-content-wrapper -->
    </div><!-- #service-banner -->

    <div class="f-content-row">
      <div class="f-content-container tx-center pbn">
        <?php $intro_content = get_field('intro_content'); ?>
        <p><?php echo $intro_content['text']; ?></p>
      </div>
    </div>

    <!-- Page Content -->
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="" class=" page type-page status-publish hentry">
            <section>
              <div class="entry-content">
                <div class="f-content-row">

                  <div class="f-content-container">
                    <div class="f-content-row">

                      <div class="f-col-50 fo2 ftm-35">
                        <h2 class="cs-title"><?php echo the_field('project_headline'); ?></h2>
                        <p style="margin-bottom: 15px;"><?php echo the_field('project_description'); ?></p>

                        <?php 
                        // Display services completed
                        // vars
                        $services_checked = get_field('project_services');
                        
                        if($services_checked): ?>
                          <ul> <!-- cs-services-completed -->
                            <?php foreach( $services_checked as $service ): ?>
                              <li class="orange-check"><?php echo $service; ?></li>
                            <?php endforeach; ?>
                          </ul>
                        <?php endif; ?>

                      </div>

                      <div class="f-col-50 f-p-l fo1">
                        <img src="<?php echo the_field('project_devices'); ?>" alt="<?php echo the_title(); ?>">
                      </div>

                    </div>
                  </div>

                </div>
              </div>
            </section>

            <!-- What We Did Section -->
            <div class="f-content-row bg-green">
              <div class="container">
                <div class="f-content-container">
                  <h2>What We Did</h2>
                  <p class="text-center pt"><?php echo get_field('what_we_did_description'); ?></p>
                </div>
              </div>
            </div>

            <!-- Website Comparison Section -->
            <div class="f-content-row bg-white">
              <div class="f-content-container">
                <div class="f-content-row text-center">
                  <h2 class="section-title">Website Redesign &amp; Web Development</h2>
                </div>

                <div class="f-content-center flex-before-after">

                    <?php $web_images = get_field('web_images'); ?>
                  
                    <!-- Before image -->
                    <div class="f-col-50 compare-images">
                      <h4>Before</h4>
                      <img src="<?php echo $web_images['before']['url']; ?>" alt="Website Redesign Before" class="cs-img-wd">
                    </div>

                    <!-- After image -->
                    <div class="f-col-50 compare-images">
                      <h4>After</h4>
                      <img src="<?php echo $web_images['after']['url']; ?>" alt="Website Redesign After" class="cs-img-wd">
                    </div>

                </div><!-- .f-content-center -->

              </div>
            </div>

            <!-- Digital Marketing Section -->
            <div class="f-content-row bg-ltblue">
              <div class="f-content-container">
                <div class="f-content-row">
                  <h2 class="section-title">Digital Marketing</h2>
                </div>

                <?php 
                  $divcounter = 1;
                  while(have_rows('digital_marketing_support')) : the_row(); 
                  // vars
                  $support_title = get_sub_field('support_title');
                  $support_text = get_sub_field('support_text');
                  $support_caption = get_sub_field('support_caption');
                  $support_image = get_sub_field('support_image'); // array to get alt attr
                
                  $divclass="";
                  if($divcounter%2==0) { $divclass="switch-left"; }
                ?>
                  <div class="f-content-row <?php echo $divclass; ?> row-spacer">

                    <div class="f-col-50">
                      <h3 class="cs-supporting-title cs-title"><?php echo $support_title; ?></h3>
                      <p><?php echo $support_text; ?></p>
                      <h4 class="pt"><?php echo $support_caption; ?></h4>

                      <?php $support_list_items = get_sub_field('support_list'); 
                      if($support_list_items): ?>
                      <ul class="pt">
                        <?php foreach($support_list_items as $support_list_item): ?>
                          <li class="orange-check"><?php echo $support_list_item; ?></li>
                        <?php endforeach; ?>
                      </ul>
                      <?php endif; ?>
                    </div>

                    <div class="f-col-50">
                      <img class="dm-switch" src="<?php echo $support_image['url']; ?>" alt="<?php echo $support_image['alt']; ?>">
                    </div>
                  </div>
                <?php 
                  $divcounter++; 
                  endwhile; 
                ?>
                
              </div>
            </div>

            <!-- Results Section -->
            <div class="f-content-row bg-white">
              <div class="f-content-container">
                <div class="f-content-row text-center">
                  <h2 class="text-dark">What We Achieved</h2>
                </div>

                <div class="f-content-thirds pt2">

                  <!-- repeater -->
                  <?php
                    if(have_rows('results')): while(have_rows('results')): the_row(); ?>
                      <h4>
                        <span class="big-org"><img class="arrow-orange" src="/wp-content/themes/signa-2017/images/icons/arrow-up-solid.svg" aria-hidden="true">&nbsp;<?php echo the_sub_field('result_number'); ?></span><br>
                        <p><?php echo the_sub_field('result_caption'); ?></p>
                      </h4>
                  <?php 
                    endwhile;
                    endif;
                  ?>


                </div>
              </div>
            </div>
            

          </article>

        <?php endwhile; // End of the loop. ?>
      </main><!-- #main -->
    </div><!-- #primary -->

    <div class="lead-form-wrapper">
      <h2>Work With Us</h2>
      <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
    </div>

<?php get_footer(); ?>