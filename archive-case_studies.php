<?php
/**
 * The template for displaying the case study archive.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
?>

  <div class="service-banner banner">
    <div class="banner-service-filter"></div>
    <div class="banner-service-content-wrapper">
      <div class="container">
        <div class="row">
          <header class="entry-header service-intro">
            <?php post_type_archive_title('<h1 class="entry-title service-heading">', '</h1>'); ?>

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

  <div class="f-content-container">
    <div class="cs-row">      

      <?php
        $args_cases = array(
          'post_type' => 'case_studies',
          'posts_per_page' => -1,
          'order' => 'ASC'
        );
        $loop = new WP_Query( $args_cases );
        
        if ( $loop->have_posts() ) : 

          $row_count = 0;
          
        while ( $loop->have_posts() ) : $loop->the_post();

          $row_count++;

        // case study image
        $cs_archive_image = get_field('cs_archive_image');

      ?>

        <a href="<?php the_permalink(); ?>" class="cs-col equal-height" data-aos="fade-up">
          <div class="cs-content" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('<?php echo $cs_archive_image; ?>'); background-size: cover; background-position: center;"></div>
          <h3 class="cs-title"><?php the_title(); ?></h3>
        </a>

      <?php
        endwhile;
        endif;
      ?>

    </div>
  </div>

<!-- Work with us lead form -->
<div class="lead-form-wrapper">
    <h2>Work With Us</h2>
    <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
</div>

<?php get_footer(); ?>