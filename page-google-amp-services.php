<?php
/**
 * Template Name: Signa 2017 Google AMP Services Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

    <?php get_template_part('template-parts/content-hero', 'content-hero'); ?>

  <!-- Intro Section White -->
    <?php if(get_field('intro_section')) : ?>
    <div class="f-content-row bg-white">
      <div class="f-content-container contain-text">
        <?php the_field('intro_section'); ?>
      </div>
    </div>
    <?php endif; ?>

  <!-- Blue Flexbox -->
    <?php $howitworks = get_field('how_it_works'); ?>
  <div class="f-content-row bg-blue">
    <div class="f-content-container">

      <!-- Colums -->
      <div class="f-content-row" style="text-align: center; align-items: center;">
        <div class="f-col-50 fo1 fmt-35 img-resize">
          <!-- Section Image -->
          <img class="phone-optim-img" src="<?php echo $howitworks['image']['url']; ?>" alt="<?php echo $howitworks['image']['alt']; ?>">
        </div>

        <div class="f-col-50 txt-left fo2" style="text-align: left;">
          <h2><?php echo $howitworks['title']; ?></h2>
          <div class="section-content">
            <?php echo $howitworks['text']; ?>
          </div>
        </div>
      </div><!-- .f-content-row -->

    </div>
  </div>

  <!-- White List Section with line breaks -->
    <?php if(have_rows('details')) : ?>
    <div class="f-content-row bg-white">
      <div class="f-content-container amp-sections">

        <!-- repeater -->
        <?php 
        while (have_rows('details')): the_row(); 
            // vars
            $detail_icon = get_sub_field('icon');
            ?>
          <div class="f-content-row blue-border-bottom">
            <div class="f-col-100 tx-center">
              <div class="detail-title">
                <img src="<?php echo $detail_icon['url']; ?>" alt="<?php echo $detail_icon['alt']; ?>" />
                <h2><?php echo the_sub_field('title'); ?></h2>
              </div>
              <p><?php echo the_sub_field('text'); ?></p>
            </div>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
    <?php endif; ?>


  <div class="lead-form-wrapper">
    <h2>Work With Us</h2>
    <div class="lead-form"><?php gravity_form(3, false, false, false, '', false); ?></div>
  </div>

<?php get_footer(); ?>