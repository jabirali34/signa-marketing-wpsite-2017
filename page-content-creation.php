<?php
/**
 *
 * Template Name: Content Creation Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

<?php get_template_part('template-parts/content-hero', 'content-hero' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="f-content-row">
      <div class="f-content-container">
        <div class="f-content-row contain-text">
          <p style="text-align: center;">At Signa Marketing, we cultivate creative talents so that we can meet the needs
            of your business. Whether it be blogs, infographics, videos, designs, or original photography, our fully in
            house team will create search engine optimized content that is meant to bring value&nbsp;and aligned with
            your brand.&nbsp;Our fully in-house team focuses on quality, original, and shareable content that
            establishes meaningful and personal connections and develops brand awareness and loyalty. From the very
            beginning, we are focused on creating content that helps achieve your business goals and grow your business.
          </p>

        </div>
      </div>
    </div>
    <div class="f-content-row blue-bg">
      <div class="f-content-container">
        <div class="f-content-row col-reverse-mobile" style="align-items:center;">
          <div class="f-col-50 fmt-35 f-center">
            <h2 class="white-text">CONTENT MARKETING STRATEGY</h2>
            <p class="white-text">In the current digital age, content is king, but you can’t just create great content
              and not promote it. It’s like hosting an award show and not inviting anyone. And without a proper
              strategy, you’re just planning to fail. What you need is a team that is capable of developing insight
              driven content marketing strategies and executing upon such strategies to create measurable results.</p>

          </div>
          <div class="f-col-50 f-p-l tx-right"><img style="width: 400px; max-width: 100%"
              src="/wp-content/uploads/content-marketing-strategy.png" alt="Website content from a laptop"></div>
        </div>
      </div>
    </div>
    <div class="f-content-row">
      <div class="f-content-container">
        <div class="f-content-row" style="align-items:center;">
          <div class="f-col-50 f-p-r">
          <img style="width:400px; max-width:100%;" src="/wp-content/uploads/content-marketing-results.png" alt="Results graph and table"></div>
          <div class="f-col-50 fmt-35 f-center">
            <h2>THE RESULTS</h2>
            <p>When your content goes live, we track and measure its performance such as how it affects conversions, and
            quality of inbound site traffic generated. From those insights, future campaign initiatives can be further
            optimized and honed to result in larger real world benefits for your business.</p>
          </div>
        </div>
      </div>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<!-- Form CTA -->
<div class="lead-form-wrapper">
  <h2>Work With Us</h2>
  <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
</div>

<div id="recent-posts-widgets">
  <div id="recent-posts">
    <h2 class="tx-center">Content Marketing Tips & Insights</h2>

    <div class="post-prev-flex">
      <?php 
        $args_dev = array(
          'posts_per_page'   => 3,
          'cat'              => '5',
          'category_name'    => 'content-marketing',
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