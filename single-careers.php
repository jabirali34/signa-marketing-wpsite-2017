<?php
/**
 * The template for displaying all single case study posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Signa_2017
 */
get_header(); 

  if ( has_post_thumbnail() ) {
    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
    $featured_image = $featured_image[0];
  } else {
    $featured_image = false;
  }

  //vars
  $xp_level = get_field('experience_level');
  $job_type = get_field_object('job_type');
  $job_type_value = $job_type['value'];
  $job_type_label = $job_type['choices'][ $job_type_value ];

  $company_about = get_field('about_company');
  $core_values = get_field('core_values');

  $job_end_desc = get_field('job_end_description');

  $apply_link = get_field('job_apply_link');

  global $post;
  $post_slug = $post->post_name;
?>

  <!-- Hero Section -->
  <div class="service-banner banner" <?php if(has_post_thumbnail()) { echo 'style="background-image: url('. $featured_image .');"'; } ?>>
    <div class="banner-service-filter"></div>
    <div class="banner-service-content-wrapper">
      <div class="container">
        <div class="row">
          <header class="entry-header service-intro" data-aos="fade-up" style="padding-bottom: 75px;">

            <h1 class="entry-title service-heading"><?php the_title(); ?></h1>
            <p class="job-subtext"><?php if($xp_level) { echo $xp_level; echo " |"; } ?> <?php echo $job_type_label; ?></p>

            <!-- Apply Button Top -->
            <a href="<?php echo get_site_url(); ?>/job-application-form?job=<?php echo $post_slug; ?>" class="btn green medium" rel="nofollow" style="margin-top:25px;">Apply Now</a>

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
            
          <div class="f-content-row job-flex-row">

            <div class="job-section">
              <h3>About Us</h3>
              <?php echo $company_about; ?>
            </div>

            <div class="job-section">
              <h3>Our Core Values</h3>
              <?php echo $core_values; ?>
            </div>

            <!-- Role Repeater -->
            <?php
              while(have_rows('role_overview')): the_row(); 
              $title = get_sub_field('role_description_title');
              $text = get_sub_field('role_description');
            ?>

              <div class="job-section">
                <h3><?php echo $title; ?></h3>
                <?php echo $text; ?>
              </div>

              <?php 
                while(have_rows('role_list')): the_row(); 
                $list_title = get_sub_field('role_list_title');
                $list_items = get_sub_field('role_list_items');
              ?>

                <div class="job-section">
                  <h3><?php echo $list_title; ?></h3>
                  <?php echo $list_items; ?>
                </div>

              <?php endwhile; ?>

            <?php endwhile; ?>

            <div class="job-section">
              <?php echo $job_end_desc; ?>
            </div>

            <div class="job-section job-section-center">
              <!-- Apply Button Bottom -->
              <a href="<?php echo get_site_url(); ?>/job-application-form?job=<?php echo $post_slug; ?>" class="btn green medium inverse" rel="nofollow">Apply Now</a>
            </div>

          </div>

        </div>
      </div>
        
    </main><!-- #main -->
  </div><!-- #primary -->

<?php 
get_footer();