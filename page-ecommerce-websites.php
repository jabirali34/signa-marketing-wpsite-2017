<?php
/**
 *
 * Template Name: Ecommerce Websites Template
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
      <div class="f-content-container contain-text">
        <h2 class="tx-center">Creating a Digital Store</h2>
        <p class="tx-center">At Signa Marketing, we build online stores that are one-of-a-kind and specially catered to
          your needs, goals, and audience. We design and build both simple and robust ecommerce stores to handle your
          exact needs and market. When it comes to ecommerce websites, there are several factors that need attention and
          the fact is that your entire business depends on your website to perform 100% of the time. That is why we
          remain on the forefront of ecommerce sales tactics and design, we are especially equipped to handle all the
          challenges an ecommerce site can present.</p>
      </div>
    </div>
    <div class="f-content-row blue-bg">
      <div class="f-content-container">
        <div class="f-content-row" style="align-items: center;">
          <div class="f-col-50 fo2 fmt-35">
            <h2 class="white-text">Designed to Convert</h2>
            <p class="white-text">Every retail business is unique and we take our time to learn every facet of your
              business, so we can build a site that can create the best user experience for your customers. Every
              interaction on your site should be meaningful and bring every individual closer to becoming a paying
              customer.</p>
            <p class="white-text">Each design choice is part of a deliberate effort to ensure your customers understand
              how to navigate through categories and products, while also making the entire checkout process as simple
              as possible.</p>
            <p class="white-text">We create awesome user experiences through optimized site speed, effective SEO,
              intuitive site navigation, responsive designs, tested call-to-actions, and great imagery.</p>

          </div>
          <div class="f-col-50 f-p-l tx-right fo1"><img style="width: 590px;" alt="ecommerce site designed to convert"
              src="/wp-content/uploads/ecommerce-website-converts.png"></div>
        </div>
      </div>
    </div>
    <div class="f-content-row">
      <div class="f-content-container">
        <div class="f-content-row" style="align-items: center;">
          <div class="f-col-50 f-p-r tx-center fo1">
            <img alt="mobile friendly site" style="width:600px; max-width: 100%;" src="/wp-content/themes/signa-2017/images/quickjob-iphone.png">
          </div>
          <div class="f-col-50 fmt-35 fo2">
            <h2>Mobile Friendly</h2>
            <p>One of the goals behind all of our designs is to make the user experience consistent and engaging across all
            platforms.</p>
            <p>25% of digital orders in the US were made from mobile devices and mobile is still on the rise. This means
            desktop users are still the majority when they hit the checkout page, but mobile users are a growing
            audience. Search engines on mobile devices also favor mobile-friendly sites as well. It is for those
            reasons, that you need a responsive site that can cater to all devices.</p>

          </div>
        </div>
      </div>
    </div>
    <div class="f-content-row blue-bg">
      <div class="f-content-container">
        <div class="f-content-row" style="align-items: center;">
          <div class="f-col-5 fmt-35 fo2">
            <h2 class="white-text">Your Online Store with SEO in Mind</h2>
            <p class="white-text"> Search engine optimization for regular, simple websites is one thing, however SEO for
              ecommerce websites is a whole other ballpark. The fundamentals of SEO are still the same, however because
              of the nature of different category pages and individual product pages, having an ecommerce website built
              along with an SEO strategy in-mind makes for a solid foundation once we launch your online store.</p>

          </div>
          <div class="f-col-50 f-p-l fo1"><img style="width: 517px;" alt="ecommerce seo"
              src="/wp-content/uploads/ecommerce-with-seo-in-mind.png"></div>
        </div>
      </div>
    </div>
    <div class="f-content-row" style="align-items: center;">
      <div class="f-content-container">
        <h2 class="tx-center">Go Beyond Your Store - Integrating Ecommerce Initiatives</h2>
        <p class="tx-center contain-text">With the correct campaigning, we will help your store grow and surpass your competition.
          We’ll help you outpace your competition with innovative SEO, compelling ads, and unique branding. You’ll need
          campaigns that seamlessly integrate with your Ecommerce site if you want to acquire new customers, entice past
          customers, generate leads, build your brand, and expand your reach. Getting the most out of your ecommerce
          store means identifying and utilizing all of your opportunities.</p>

      </div>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<!-- Form CTA -->
<div class="lead-form-wrapper">
  <h2>Work With Us</h2>
  <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
</div>

<?php get_footer(); ?>