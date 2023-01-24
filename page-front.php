<?php
/**
 * Template Name: Front Page Template
 */
get_header(); ?>

<div class="content-home content-default content-default-home">

  <div class="home-banner banner home-banner-new">
    <div class="banner-video-filter"></div>
    <div class="banner-video" style="width: 100%; height: 100%;" data-vide-bg="/video/website-banner-video-v2"
      data-vide-options="position: 0% 50%, loop: true, posterType: jpg">

      <div
        style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-repeat: no-repeat; background-position: 0% 50%; background-image: none;">
        <?php
                        $uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
                        $uaStart = substr($uaFull, 0, 4);

                        $uaPhone = [ // use `= array(` if PHP<5.4
                            '(android|bb\d+|meego).+mobile','avantgo','bada\/','blackberry','blazer','compal','elaine','fennec','hiptop','iemobile','ip(hone|od)','iris','kindle','lge ','maemo','midp','mmp','mobile.+firefox','netfront','opera m(ob|in)i','palm( os)?','phone','p(ixi|re)\/','plucker','pocket','psp','series(4|6)0','symbian','treo','up\.(browser|link)','vodafone','wap','windows ce','xda','xiino'
                        ];

                        $isPhone = preg_match('/' . implode($uaPhone, '|') . '/i', $uaFull);
                        //$isMobile = preg_match('/' . implode($uaMobile, '|') . '/i', $uaStart);

                        if($isPhone) {
                            // do nothing
                      } else { ?>
        <video muted autoplay="" loop=""
          style="visibility: visible; margin: auto; position: absolute; z-index: -1; top: 50%; left: 0%; transform: translate(0%, -50%); width: 100%; height: auto;">
          <source src="/video/Signa-Homepage-Video.mp4" type="video/mp4">
        </video>
        <?php }
                    ?>
      </div>
    </div>
    <!-- #banner-video -->

    <div class="banner-content-wrapper">
      <div class="f-content-container intro">
        <h1 class="home-heading amp-font-of-title" data-aos="zoom-in">Strengthening the <span>Connection</span> Between <span>Brand and Consumer</span></h1>
      </div>
    </div>
    <!-- #banner-video -->

    <a id="goto-anchor" href="#goto-anchor" class="goto-anchor">
      <img src="/wp-content/themes/signa-2017/images/icons/angle-double-down-solid.svg" aria-hidden="true" width="25">
    </a>
  </div>
  <!-- #home-banner -->

  <div class="f-content-container">
    <h2 class="heading mb-1">What We Do</h2>
    <p class="value">We strive to make each aspect of marketing a business online clear and understandable, as well as give our clients the digital insights needed to succeed in their market space</p>
  </div>

  <div class="home-services">
    <div class="home-service col-1" data-aos="fade-up">
      <div class="home-service-img">
        <a href="/digital-marketing/">
          <span>Digital
            <br>Marketing</span>
        </a>
      </div>
    </div>
    <div class="home-service col-2" data-aos="fade-up">
      <div class="home-service-img">
        <a href="/small-business/">
          <span>Small
            <br>Business</span>
        </a>
      </div>
    </div>
    <div class="home-service col-3" data-aos="fade-up">
      <div class="home-service-img">
        <a href="/creative/">
          <span>Branding
            <br>& Design</span>
        </a>
      </div>
    </div>
  </div>
  <!-- #home-services -->

  <?php get_template_part('template-parts/testimonials', 'testimonials' ); ?>

  <div style="background: #3878a8;">
    <div class="f-content-container" style="padding-top:50px; padding-bottom:50px;">
      <h2 style="color: #fff; text-align: center;">Get A Free Competitive Analysis For Your Website</h2>
      <br>
      <a class="btn-white" href="/competitive-analysis/">Get Your Competitive Analysis</a>
    </div>
  </div>

  <div class="lead-form-wrapper">
    <h2>Work With Us</h2>
    <div class="lead-form">
      <?php gravity_form( 3, false, false, false, '', false ); ?>
    </div>
  </div>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

  <div class="bottom-cta-form">
  </div>
  <!-- #bottom-cta-form -->

  <div id="recent-posts-widgets">
    <div id="recent-posts">
      <h2 class="tx-center">Tips & Insights Blog</h2>
      <?php 
                    $postslist = get_posts('numberposts=3&order=DESC'); foreach ($postslist as $post) : setup_postdata($post); 

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
          <img class="b-lazy" data-src="<?php echo $featured_image; ?>" alt="<?php the_title(); ?>">
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
  <!-- #content content-default content-default-home -->


<?php get_footer(); ?>