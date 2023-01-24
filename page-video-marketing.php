<?php
/**
 *
 * Template Name: Video Marketing Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

<?php get_template_part('template-parts/content-hero', 'content-hero' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div id="video-marketing-page">
      <div class="f-content-row">
        <div class="f-content-container">
          <div class="f-content-row">
            <div class="f-col-60 fo2 fmt-35 f-center">
              <h2>What is Video Marketing?</h2>
              <p>Video marketing is a promotional campaign strategy that incorporates the use of videos to increase sales,
              traffic, and build brand identity and awareness. Whether you’re launching a new service or simply wanting
              to expand, you’ll be able to generate leads, sales, and traffic through platforms such as Youtube ads,
              Facebook ads, and Instagram ads that can come in the form of promotional videos or even testimonials.
              Whatever your goals, you can be assured that Signa Marketing can cater to your every video marketing
              needs.</p>

            </div>
            <div class="f-col-30 f-p-l tx-right fo1">
              <img src="/wp-content/uploads/video-marketing.png" alt="eCommerce video preview"></div>
          </div>
        </div>
      </div>
      <div class="f-content-row" style="background-color: #38a992;">
        <div class="f-content-container">
          <h2 class="tx-center white-text">Why You Need Video Marketing?</h2>
          <p class="white-text tx-center contain-text">Video marketing allows you to hone in on your audience like any other type of
            marketing, but compared to other formats, videos allow your brand and messaging to make a much more
            impactful connection with the viewer. People simply respond more to video and consumers are less likely to
            tune-out your content. On social media this is more apparent as the retention periods and sharing rates of
            videos are much higher than images and text posts.</p>

        </div>
      </div>
      <div class="f-content-row">
        <div class="f-content-container">
          <div class="f-content-row">
            <div class="f-col-30 f-p-r tx-center"><img src="/wp-content/uploads/video-seo.png" alt="SEO Video Graphic"></div>
            <div class="f-col-60 fmt-35 m-b-60 f-center">
              <h2>SEO (Search Engine Optimization)</h2>
              <p>Videos offer long term SEO value not only because google favors videos in the rankings, but also because
              videos often generate backlinks, especially if you post on more than one video sharing platform, which
              increases your site’s authority and results in your video funneling traffic towards your site. It’s also
              been observed that people prefer to click on video links more than text links and that videos are shared
              more on social media. With that information in mind, it’s easy to see how videos can become traffic
              generating machines.</p>

            </div>
          </div>
          <div class="f-content-row">
            <div class="f-col-30 f-p-r tx-center"><img src="/wp-content/uploads/video-sales.png" alt="Sales Generation Graphic"></div>
            <div class="f-col-60 fmt-35 m-b-60 f-center">
              <h2>Sales Generation</h2>
              <p>Videos allow you to generate sales through increased viewer engagement, because videos, due to their
              visual nature, can be much more impactful on viewer’s purchasing decision than usual static imagery. To
              back that up, in a report by Google (Micro-Moments: guide to winning the shift to mobile), it was stated
              that 48% of smartphone users are more likely to buy from companies whose mobile sites or apps provide
              instructional video content. So you can see how an entertaining and informative video can generate sales
              and increase conversion rates.</p>

            </div>
          </div>
          <div class="f-content-row">
            <div class="f-col-30 f-p-r tx-center"><img src="/wp-content/uploads/branding.png" alt="Video Branding Graphic"></div>
            <div class="f-col-60 fmt-35 f-center">
              <h2>Branding</h2>
              <p>Videos are a powerful multi-purpose communication tool. While convincing a consumer to buy a product or
              service, you are also establishing your brand and because of how effectively videos can communicate
              information, you are able to define your company’s personality and beliefs. In a single video you are able
              to shape the audience’s perception of your brand.</p>

            </div>
          </div>
        </div>
      </div>
      <div class="f-content-row" style="background-color: #3879a9;">
        <div class="f-content-container">
          <h2 class="tx-center white-text">The Creative &amp; Video Production</h2>
          <p class="white-text tx-center contain-text">For a video to successfully capture an audience’s attention, it has to be
            entertaining, informative, and purposeful. At Signa Marketing, we refuse to aimlessly flex our creative
            muscles and produce something that doesn’t truly meet the needs of your business. We prefer to ask the hard
            questions, as we plan the creative direction of a video, and align the creative aspects of video production
            with the goals of your business. We’ll find the right message to convey to your audience and execute it
            accurately. On top of that, video production will be handled by a mostly in-house team as we take you
            through every step including: scripting/storyboarding, pre-production, production, post production, and the
            marketing process.</p>

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