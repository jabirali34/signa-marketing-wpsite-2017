<?php
/**
 * Template Name: Signa 2017 Media Template
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
        <div class="f-content-container more-width" style="padding-top:75px;">
          <div class="f-content-row">

            <!-- Repeater -->
            <?php while(have_rows('creative_block')): the_row(); ?>
              <div class="f-col-50 mobile-custom-col flexed">
                <div class="section-content">
                  <h2><?php echo the_sub_field('block_title'); ?></h2>
                  <p><?php echo the_sub_field('block_text'); ?></p>
                </div>
                <a class="blue-learn-button" href="<?php echo get_sub_field('block_link'); ?>">Learn More</a>
              </div>
            <?php endwhile; ?>

          </div>
        </div>
      </div>

      <!-- Signa Audio -->
      <div class="f-content-row who-we-are-bg" style="background-image:url('/wp-content/uploads/signa-audio-bg.jpg')">
        <div class="who-we-are-row-filter-bg">

          <?php $audio_section = get_field('signa_audio'); ?>

          <div class="f-content-container">
            <h2 class="white-text no-m-t"><?php echo $audio_section['section_title']; ?></h2>
            <p class="white-text tx-center no-m-b" style="width: 960px; max-width: 100%;"><?php echo $audio_section['section_text']; ?></p>
            <br>
            <a class="btn-white" href="<?php echo $audio_section['section_link']; ?>">Learn More</a>
          </div>

        </div>
      </div>
        
    </main><!-- #main -->
  </div><!-- #primary -->

  <div class="lead-form-wrapper">
    <h2>Work With Us</h2>
    <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
  </div>

  <div id="recent-posts-widgets">
  <div id="recent-posts">
    <h2 class="tx-center">Media Tips & Insights</h2>

    <div class="post-prev-flex">
      <?php 
        $args_dev = array(
          'posts_per_page'   => 3,
          'cat'              => '11',
          'category_name'    => 'video-marketing',
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
    </div>

    <div class="view-our-blog-btn">
      <a class="green-learn-button" href="/blog/">View Our Blog</a>
    </div>
  </div>
  <!-- End Recent Posts -->

</div>

<?php get_footer(); ?>