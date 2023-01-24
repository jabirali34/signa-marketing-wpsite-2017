<?php
/**
 * Template Name: Signa 2017 Web Development Template
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

      <div class="f-content-row bg-ltblue">

        <div class="f-content-container">
          <div class="f-content-row" style="align-items:center;">

            <div class="f-col-50 fo2 ftm-35">
              <?php $custom_group = get_field('custom_group'); ?>
              <h2 class="white-text"><?php echo $custom_group['custom_title']; ?></h2>
              <p class="white-text"><?php echo $custom_group['custom_text']; ?></p><br>
              <a class="btn-white" href="<?php echo $custom_group['custom_button']; ?>">Learn More</a>
            </div>

            <div class="f-col-50 f-p-l fo1">
              <img src="<?php echo $custom_group['custom_image']['url']; ?>" alt="<?php echo $custom_group['custom_image']['alt']; ?>">
            </div>

          </div>
        </div>

      </div>

      <div class="f-content-row">
        <div class="f-content-container">
          <div class="f-content-row" style="align-items:center;">

            <?php $ecommerce_group = get_field('ecommerce_group'); ?>

            <div class="f-col-50 f-p-r">
              <img src="<?php echo $ecommerce_group['custom_image']['url']; ?>" alt="<?php echo $ecommerce_group['custom_image']['alt']; ?>">
            </div>

            <div class="f-col-50">
              <h2><?php echo $ecommerce_group['custom_title']; ?></h2>
              <p><?php echo $ecommerce_group['custom_text']; ?></p><br>
              <a class="green-learn-button " href="<?php echo $ecommerce_group['custom_button']; ?>">Learn More</a>
            </div>

          </div>
        </div>
      </div>

      <!-- GOOGLE AMP SECTION -->
      <div class="f-content-row bg-ltblue">
        <div class="f-content-container">
          <div class="f-content-row" style="align-items: center;">
            <div class="f-col-50 fo2 ftm-35">
              <?php $amp_group = get_field('amp_group'); ?>
              <h2 class="white-text"><?php echo $amp_group['amp_title']; ?></h2>
              <p class="white-text"><?php echo $amp_group['amp_text']; ?></p><br>
              <a class="btn-white" href="<?php echo $amp_group['amp_button']; ?>">Learn More</a>
            </div>
            <div class="f-col-50 f-p-l fo1">
              <img src="<?php echo $amp_group['amp_image']['url']; ?>" alt="<?php echo $amp_group['amp_image']['alt']; ?>">
            </div>
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

  <div id="recent-posts-widgets">
    <div id="recent-posts">
      <h2 class="tx-center">Website Tips & Insights</h2>
      <?php 
        $args_dev = array(
          'posts_per_page'   => 3,
          'cat'              => '3',
          'category_name'    => 'websites',
          'orderby'          => 'date',
          'order'            => 'DESC',
          'post_type'        => 'post',
          'post_status'      => 'publish',
        );
        $postslist = get_posts($args_dev); foreach ($postslist as $post) : setup_postdata($post); 

        if ( has_post_thumbnail() ) {
            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
            $featured_image = $featured_image[0];
        } else {
            $featured_image = false;
        }
      ?>
      <div class="recent-post-thumbnail" data-aos="fade-up">
        <?php if ( has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>">
          <div class="blog-prev-img-container">
            <img class="b-lazy" data-src="<?php echo $featured_image; ?>" alt="<?php the_title(); ?>">
          </div>
        </a>
        <?php endif; ?>
        <span class="recent-posts-date">
          <?php the_time('F j, Y') ?>
        </span>
        <a class="recent-posts-title" title='Post: <?php the_title(); ?>' href='<?php the_permalink(); ?>'>
          <?php the_title(); ?>
        </a>
      </div>
      <?php endforeach; ?>
      <div class="view-our-blog-btn">
        <a class="green-learn-button" href="/blog/">View Our Blog</a>
      </div>
    </div>
    <!-- End Recent Posts -->

  </div>

<?php get_footer(); ?>