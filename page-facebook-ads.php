<?php
/**
 *
 * Template Name: Facebook Advertising Template
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
        <h2 class=" tx-center white-text">What Signa Marketing can do for you.</h2>
        <div class="f-content-row">
          <div class="email-marketing-check-row">
            <div class="col-1-check-white">
              <ul class="center-check-blue">
                <li class="white-check">Increase In-Store Transactions</li>
                <li class="white-check">Increase Online Transactions</li>
                <li class="white-check">Generate Leads</li>
              </ul>
            </div>
            <div class="col-2-check-white">
              <ul class="center-check-blue">
                <li class="white-check">Create &amp; Grow Brand Awareness</li>
                <li class="white-check">Increase Reach</li>
                <li class="white-check">Provide Insights and Analytics</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="f-content-row">
      <div class="f-content-container">
        <h2 class="tx-center">Campaigns</h2>
        <p class="tx-center">Paid campaigns are how we help you expand your influence, grow your followership, and build
          your brand. This can result Which results in increased ROI and increase your brand’s exposure for a more long
          term strategy, and profit for you. Signa Marketing customizes each campaign to align with the goals of your
          business. Whether you’re a store owner that wants more in-store sales or a product seller that wants more
          online sales, we’ll Signa Marketing will put you steps ahead of your competition.</p>

        <div class="f-content-row">
          <div class="campaigns email-marketing-check-row">
            <div class="col-1-check-white">
              <ul class="center-check-blue">
                <li class="orange-check">Remarketing Campaign</li>
                <li class="orange-check">Product Launch Campaigns</li>
              </ul>
            </div>
            <div class="col-2-check-white">
              <ul class="center-check-blue">
                <li class="orange-check">Service Promotion Campaigns</li>
                <li class="orange-check">Local Exposure Campaigns</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="f-content-row blue-bg">
      <div class="f-content-container">
        <h2 class="white-text tx-center">Reach the world - Precise User Targeting</h2>
        <p class="white-text tx-center">Facebook is the largest online social network and number one app on mobile
          devices currently. With Facebook’s targeting capabilities, we are able to your target audience and invest your
          marketing budget on the users that matter the most. By choosing Signa Marketing, we make sure the right
          message reaches the right people at the right time. We’re able to do this through demographic, interests,
          device, and behavioral targeting. We learn how your customers navigate the web and target them accordingly.
        </p>

        <div class="fb-user-targeting-section f-content-row">
          <div class="f-col-50">
            <p id="facebook-ads-col-bold-text"><b>Demographics</b></p>
            <p class="white-text">Target your audience through age, gender, ethnicity, education, income, relationship
              status, location, and more.</p>

          </div>
          <div class="f-col-50">
            <p id="facebook-ads-col-bold-text"><b>Interests</b></p>
            <p class="white-text">Target your audience through their favorite hobbies, artists, sports, activities, and
              more.</p>

          </div>
          <div class="f-col-50">
            <p id="facebook-ads-col-bold-text"><b>Behaviors</b></p>
            <p class="white-text">Target your audience through their purchase behavior, digital activities, and more.
            </p>

          </div>
          <div class="f-col-50">
            <p id="facebook-ads-col-bold-text"><b>Device Usage</b></p>
            <p class="white-text">Is your audience using their desktop, tablet, or mobile device.</p>

          </div>
          <div class="f-col-50">
            <p id="facebook-ads-col-bold-text"><b>Connections</b></p>
            <p class="white-text">Target fans of your service or product, friends of fans, or people who haven’t liked
              the page yet.</p>

          </div>
          <div class="f-col-50">
            <p id="facebook-ads-col-bold-text"><b>Custom Audiences</b></p>
            <p class="white-text">Target a list of people you know are interested in your product. This list can be
              people subscribed to your newsletter, people who’ve shopped in your store, etc.</p>

          </div>
        </div>
      </div>
    </div>
    <div class="f-content-row">
      <div class="f-content-container">
        <h2 class="tx-center">Multiple Ad Types</h2>
        <p class="tx-center">Facebook not only allows you to find your audience with unmatched precision, but it will
          allow you to make stronger connections through its multiple ad types that reach your followers in a more
          efficient and meaningful way.</p>
        <p class="tx-center">Among the Many Ad Types are:</p>

        <div class="f-content-row">
          <div class="multiple-ad-types email-marketing-check-row">
            <div class="col-1-check-white">
              <ul class="center-check-blue">
                <li class="orange-check">Domain Ad</li>
                <li class="orange-check">Lead Ads</li>
                <li class="orange-check">Dynamic Product Ads</li>
              </ul>
            </div>
            <div class="col-2-check-white">
              <ul class="center-check-blue">
                <li class="orange-check">Carousel Ads</li>
                <li class="orange-check">Video Ads</li>
                <li class="orange-check">Event Ads</li>
              </ul>
            </div>
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
      <h2 class="tx-center">PPC Tips & Insights</h2>

      <div class="post-prev-flex">
        <?php 
          $args_dev = array(
            'posts_per_page'   => 3,
            'cat'              => '8',
            'category_name'    => 'ppc-marketing',
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