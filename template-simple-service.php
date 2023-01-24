<?php
/**
 *
 * Template Name: Simple Service Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>

<!-- Hero Section -->
<?php get_template_part('template-parts/content-hero'); ?>

<?php 
  $flopcounter = 1;
  if(have_rows('content_ff')): while(have_rows('content_ff')): the_row();
  // vars
  $ff_title = get_sub_field('ff_title'); // text
  $ff_text = get_sub_field('ff_text'); // wyswig minimal
  $ff_caption = get_sub_field('ff_caption'); // text
  $ff_list = get_sub_field('ff_list'); // checkbox
  $ff_link = get_sub_field('ff_link'); // page link
  $ff_image = get_sub_field('ff_image'); // array

  // White Classes
  $flopclass="";
  $flopimageclass="tx-right";
  $flopsectioncolor="bg-ltblue";
  $checkcolor="orange-check";
  $btncolor="green-learn-button";

  // Blue Classes
  if($flopcounter%2==0) { 
    $flopclass="switch-left"; 
    $flopimageclass="";
    $flopsectioncolor="bg-white";
    $checkcolor="green-check";
    $btncolor="white-learn-button";
  }
?>
  <div class="f-content-row <?php echo $flopsectioncolor; ?>">
    <div class="f-content-container">
      <div class="f-content-row <?php echo $flopclass; ?>" style="align-items:center;">

        <div class="f-col-50 fo2 fmt-35">
          <h2><?php echo $ff_title; ?></h2>
          <p><?php echo $ff_text; ?></p>

          <?php if($ff_list): ?>
            <p><strong><?php echo $ff_caption; ?></strong></p>
            <ul>
              <?php foreach($ff_list as $ff_list_item): ?>
                <li class="<?php echo $checkcolor; ?>"><?php echo $ff_list_item; ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <?php if($ff_link): ?>
            <div class="button-top-space-1 f-center m-b-60">
              <a class="<?php echo $btncolor; ?>" href="<?php echo $ff_link; ?>">Learn More</a>
            </div>
          <?php endif; ?>
        </div>

        <div class="f-col-50 <?php echo $flopimageclass; ?> f-p-l fo1">
          <img class="img-flipflop centered" src="<?php echo $ff_image['url']; ?>" alt="<?php echo $ff_image['alt']; ?>" title="<?php echo $ff_image['title']; ?>" />
        </div>

      </div>
    </div>
  </div>
<?php 
  $flopcounter++; 
  endwhile; endif;
?>

<!-- FORM CTA -->
<div class="lead-form-wrapper">
  <h2>Work With Us</h2>
  <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
</div>

<?php if(is_page('video-production')): ?>
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
<?php endif; ?>

<?php get_footer(); ?>