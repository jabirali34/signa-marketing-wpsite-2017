<?php
/**
 * Template Name: Signa 2017 Specializations Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

    <?php get_template_part('template-parts/content-hero', 'content-hero'); ?>

  <!-- Page Content -->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <article>
        <div class="entry-content">

          <!-- Intro Section White -->
            <?php if(get_field('intro_section')) : ?>
            <div class="f-content-row bg-white">
              <div class="f-content-container contain-text">
                <?php the_field('intro_section'); ?>
              </div>
            </div>
            <?php endif; ?>

          <!-- Page Section Blue -->
            <?php if(get_field('page_section')) : ?>
            <div class="f-content-row bg-ltblue">
              <div class="f-content-container contain-text">
                <?php the_field('page_section'); ?>
              </div>
            </div>
            <?php endif; ?>

          <!-- Image list template part -->
            <?php get_template_part('/template-parts/content-imagelist', 'content-imagelist'); ?>

          <!-- Flip/flop layout template part -->
            <?php get_template_part('/template-parts/content-flipflop', 'cotnent-flipflop'); ?>

        </div>
      </article>
        
    </main><!-- #main -->
  </div><!-- #primary -->

  <div class="lead-form-wrapper">
    <h2>Work With Us</h2>
    <div class="lead-form"><?php gravity_form(3, false, false, false, '', false); ?></div>
  </div>




  <div id="recent-posts-widgets">
  <div id="recent-posts">
    <h2 class="tx-center">Digital Marketing Tips & Insights</h2>

    <div class="post-prev-flex">
        <?php 
        $args_dev = array(
          'posts_per_page'   => 3,
          'cat'              => '6',
          'category_name'    => 'digital-marketing',
          'orderby'          => 'date',
          'order'            => 'DESC',
          'post_type'        => 'post',
          'post_status'      => 'publish',
        );
        $postslist = get_posts($args_dev); foreach ($postslist as $post) : setup_postdata($post); 

            if (has_post_thumbnail() ) {
                $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                $featured_image = $featured_image[0];
            } else {
                $featured_image = false;
            }
            ?>
      <div class="recent-post-thumbnail" data-aos="fade-up">
            <?php if (has_post_thumbnail()) : ?>
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