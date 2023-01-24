<?php
/**
 *
 * Template Name: Paid Search Management Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

<?php get_template_part('template-parts/content-hero', 'content-hero' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="paid-search-management-page">



      <div class="f-content-row">
        <div class="f-content-container tx-center">
          <h2>Local Paid Search</h2>
          <p>You’re a small business, a startup, or an experienced local store owner, and you want to launch a new
          advertising initiative to drive traffic or grow your reach online. Whatever your goal may be, you want to know
          what should be expected from investing in a digital marketing agency. At Signa Marketing, our methodologies
          are transparent as we work closely with you to create local paid search campaigns and messages that align with
          your brand, and business goals.</p>
          <p>Being a business owner, you might have tried managing a ppc (pay per click) campaign for your own business and
          you probably found that the rabbit hole of advertising runs far deeper than you first anticipated. With us,
          you’ll get an account manager to usher campaigns from simply goals and ideas to a fully designed and launched
          paid search campaign.</p>
        </div>
      </div>


      <div class="blue-bg">
        <div class="f-content-container">
          <h2 class=" white-text tx-center m-b-60">From the Drawing Board to the Screen</h2>
          <div class="f-content-row">
            <div class="f-col-30 tx-right f-p-r"><img src="/wp-content/uploads/research-01.png"
                alt="consumer research magnifying glass" title="Competitive Research "></div>
            <div class="f-col-60">
              <h3 class="white-text no-m-t">Research</h3>
              <p class="white-text">Our initial research lets us gain an intimate understanding of your goals, your
                industry, your competitors, your consumers’ mindset, and more.</p>

            </div>
          </div>
          <div class="f-content-row">
            <div class="f-col-30 tx-right f-p-r"><img alt="imgae database stacks" title="Database Stacks"
                src="/wp-content/uploads/build-1.png"></div>
            <div class="f-col-60">
              <h3 class="white-text no-m-t">Build</h3>
              <p class="white-text">This is a combination of creative and logical processes that allow us to blend
                meaningful messaging with strategic wording and targeting.</p>

            </div>
          </div>
          <div class="f-content-row">
            <div class="f-col-30 tx-right f-p-r"><img alt="image of rocket ship" title="Launch Paid Campaigns"
                src="/wp-content/uploads/launch.png"></div>
            <div class="f-col-60">
              <h3 class="white-text no-m-t">Launch</h3>
              <p class="white-text">Your campaign goes live and we begin monitoring its progress and results.</p>

            </div>
          </div>
          <div class="f-content-row">
            <div class="f-col-30 tx-right f-p-r"><img alt="image of analytics and metrics"
                title="Analyze Paid Campaigns" src="/wp-content/uploads/analyze.png"></div>
            <div class="f-col-60">
              <h3 class="white-text no-m-t">Analyze</h3>
              <p class="white-text">We utilize a variety of softwares to track inbound analytics and metrics.</p>

            </div>
          </div>
          <div class="f-content-row">
            <div class="f-col-30 tx-right f-p-r">
              <img alt="image of optimizing campaign" title="Optimize Paid Campaign"
                src="/wp-content/uploads/adjust.png"></div>
            <div class="f-col-60">
              <h3 class="white-text no-m-t">Adjust</h3>
              <p class="white-text">After collecting and interpreting all relevant data, we begin adjusting and tweaking
                aspects of the campaign to increase conversion rates, drive traffic, and increase ROI.</p>

            </div>
          </div>
        </div>
      </div>



      <div class="f-content-row">
        <div class="f-content-container">
          <div class="f-content-row">
            <div class="f-col-50 f-p-r tx-center">
              <img alt="landing page" title="Highway 85 Landing Page Example" style="width:300px; max-width:100%;"
                src="/wp-content/uploads/paid-search-landing-pages.jpg"></div>
            <div class="f-col-50 fmt-35">
              <h2>Landing Pages</h2>
              <p>You know just as we do that’s it’s not just about getting interested parties to click on an ad, but to
              convince consumers to regularly convert. We take things a step farther by building landing pages that are
              designed to help users convert. Our designs focus on the user experience by optimizing loading speeds and
              creating pages that are responsive and functional on all devices. Also, to increase conversion rates, we,
              continuously tweak verbiage, designs, and optimize keyword targeting so that our ads appear only to people
              who have entered relevant search queries. The more relevant and precise our targeting can be, the easier
              it is to convert and create revenue for you.</p>
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
        <h2 class="tx-center">Paid Search Tips & Insights</h2>

        <div class="post-prev-flex">
          <?php 
            $args_dev = array(
              'posts_per_page'   => 3,
              'cat'              => '663',
              'category_name'    => 'paid-search',
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