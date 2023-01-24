<?php
/**
 *
 * Template Name: Small Business Videos Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

<?php get_template_part('template-parts/content-hero', 'content-hero' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="f-content-row blue-bg">
      <div class="f-content-container">
        <div class="f-content-row">
          <div class="f-col-50 f-p-r"><img style="width: 420px; margin-bottom: 25px;" src="/wp-content/uploads/Why-sb-needs-video.svg"
              alt="Video Production for Small Businesses"></div>
          <div class="f-col-50">
            <h2 class="white-text">Why Small Businesses Need Video</h2>
            <p class="white-text">Apart from video being a very consumable form of content, there are several reasons
              why your small business needs to be using video.</p>
            <p class="white-text">Firstly, videos can be optimized for search engines for your target keywords and
              phrases. There is a lot of long term SEO value here and embedding a video in your website can increase
              your user experience tremendously.</p>
            <p class="white-text">In addition, videos usually lead to higher conversion rates, whatever your desired
              action may be; a form submission, email sign up, or sale. In a report by Google, it was stated that 48% of
              smartphone users are more likely to buy from businesses whose mobile sites or app provide instructional
              video content.</p>
            <p class="white-text">Lastly, video is one of the best forms to share your story. Storytelling, whether to
              introduce your business or to promote your latest campaign can really boost your business’s brand and
              exposure. Utilizing video can resonate with your audience and encourage them to take your desired action.
            </p>

          </div>
        </div>
      </div>
    </div>
    <div class="f-content-row">
      <div class="f-content-container">
        <h2 class="tx-center">Types of Video</h2>
        <p class="tx-center">We are able to produce several types of videos, all geared toward a specific goal. Whether
          you need a video to introduce your team, or explain a new service or product, we have the resources and
          experience to deliver a video that is memorable and results driven. Let our team of writers and creative
          professionals create and produce a video for your small business today.</p>
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
        <h2 class="tx-center">Video Marketing Tips & Insights</h2>

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