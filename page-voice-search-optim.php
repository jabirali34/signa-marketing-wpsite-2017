<?php
/**
 * Template Name: Signa 2017 Voice Search Optimization Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

  <?php get_template_part('template-parts/content-hero', 'content-hero' ); ?>

  <!-- Intro Section White -->
  <?php if(get_field('intro_section')): ?>
    <div class="f-content-row bg-white">
      <div class="f-content-container">
        <?php the_field('intro_section'); ?>
      </div>
    </div>
  <?php endif; ?>

  <!-- Page Content Flip-Flop Sections -->
  <?php
    $flopcounter = 1;
    if(have_rows('content_ff')): while(have_rows('content_ff')): the_row();
    // vars
    $ff_title = get_sub_field('ff_title'); // text
    $ff_text = get_sub_field('ff_text'); // wyswig minimal
    $ff_list = get_sub_field('ff_list'); // checkbox
    $ff_image = get_sub_field('ff_image'); // array

    // Blue Classes
    $flopsectioncolor="bg-blue";
    $checkedclass ="green-check";

    // White CLasses
    if($flopcounter/2==1) { 
      $flopsectioncolor="bg-white";
      $checkedclass="orange-check";
    }
  ?>
    <div class="f-content-row <?php echo $flopsectioncolor; ?>">
      <div class="f-content-container">

        <!-- Full Width -->
        <div class="f-content-row">
          <div class="f-col-100">
            <h2><?php echo $ff_title; ?></h2>
            <p><?php echo $ff_text; ?></p>
          </div>
        </div><!-- .f-content-row -->

        <!-- Colums -->
        <div class="f-content-row" style="align-items: center;">
          <div class="f-col-50 fo1 fmt-35 img-resize">
            <!-- Section Image -->
            <img class="vs-image" style="width: 100%; max-width: 517px;" src="<?php echo $ff_image['url']; ?>" alt="<?php echo $ff_image['alt']; ?>" />
          </div>

          <div class="f-col-50 txt-left fo2">
            <?php if($ff_list): ?>
              <p style="margin-bottom:15px;"><strong>What We'll Do:</strong></p>
              <ul>
                <?php foreach($ff_list as $ff_list_item): ?>
                  <li class="<?php echo $checkedclass; ?>"><?php echo $ff_list_item; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div><!-- .f-content-row -->

      </div>
    </div>
  <?php 
    $flopcounter++; 
    endwhile; endif;
  ?>

  <div class="lead-form-wrapper">
    <h2>Work With Us</h2>
    <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
  </div>

<?php get_footer(); ?>