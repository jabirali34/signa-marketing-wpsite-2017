<?php
/**
 * The template for displaying the careers archive.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); 
?>

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

            <h1 class="entry-title service-heading">Careers</h1>

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

  <!-- Page Content -->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="f-content-row">
        <div class="f-content-container" style="max-width: 900px;">

          <?php 
            $args_careers = array(
              'post_type' => 'careers',
              'posts_per_page' => -1,
              'orderby' => 'DESC',
            );
            $loop = new WP_Query($args_careers);
            while($loop->have_posts() ) : $loop->the_post();
              
            //vars
            $job_type = get_field_object('job_type');
            $job_type_value = $job_type['value'];
            $job_type_label = $job_type['choices'][ $job_type_value ];

            $xp_level = get_field('experience_level');
            ?>
            
              <div class="f-content-row row-jobs">
                <div class="f-col-50">
                  <h3 class="job-listing-mobile"><?php the_title(); ?></h3>
                  <p class="job-listing-subtitle"><?php if($xp_level) { echo $xp_level; echo " |"; } ?> <?php echo $job_type_label; ?></p>
                </div>
                <div class="f-col-50">
                  <a href="<?php echo get_permalink(); ?>" class="blue-learn-button careers-btn">View Job</a>
                </div>
              </div>

            <?php
            endwhile;
          ?>

        </div>
      </div>
        
    </main><!-- #main -->
  </div><!-- #primary -->

<?php 
get_footer();