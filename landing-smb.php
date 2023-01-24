<?php
/**
 * Template Name: SMB Landing Page 
 */
get_header('smb');
?>

<?php 
  if ( has_post_thumbnail() ) {
    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'huge');
    $featured_image = $featured_image[0];
  } else {
    $featured_image = false;
  }
?>

<!-- Hero Section -->
<?php $hero = get_field('hero_section'); ?>
<section class="bg-smb-img" style="background: url('<?php echo $featured_image; ?>'); background-position: center; background-size: cover;">
  <div class="container">
    <div class="row align-items-center row-relative">
      <div class="col-12 col-md-6 col-lg-6">
        <h1>
          <span><?php echo $hero['append_title']; ?></span>
          <?php echo $hero['title']; ?>
        </h1>
        <div class="hero-text-wrap">
          <?php echo $hero['paragraph_text']; ?>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-5 offset-lg-1 mobile-col-none">
        <div class="smb-form-container">
          <div class="form-title-wrap">
            <h3><?php echo $hero['form_title']; ?></h3>
            <p><?php echo $hero['form_subtitle']; ?></p>
          </div>
          <!-- form -->
          <div class="strategy-call-form-wrap">
            <?php echo do_shortcode('[gravityform id="20" title="false" description="false" ajax="true" tabindex="49"]'); ?>
          </div>
        </div>
      </div>

      <div class="anchor-container">
        <a href="#anatomy">
          <div class="anchor">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAAAWlBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACLSV5RAAAAHXRSTlMA4+n27flcMSr8VVgtJ2FRKfJMNDsY2nhoSEIiED4zZN8AAAD0SURBVFjD7ZPbDoIwEEQXiyCtoCJyUfv/vyltTDZy6YC8mLjnjXRyQnenJAiCIAi/R25uy3JJOJfGNjoSxlxs/aQAjbU2OhDipPpcRwHuWZ/YnZEndqnw3VpvOuD/ia8UJrkgk1HvBDJlbk7zt+uUO78Spti7ZErTlJY9iMSZ6nR+PlFFDDJN90n7OfMJNM3sTsfOc6blmElTokYebJpogVbjtmKKbPhaysDe8cTTwd4rWs/pw6Qtf63FcAvw3nHHd7m7p997Tt+ifQuOZBTwYJNvQeP3Dj24BTznDeg9e7ZRcgs2Uih+K9uo2gcJgiAIwl/xAnksFMXd6nm4AAAAAElFTkSuQmCC" alt="Down Arrow Icon" width="36" style="position: relative; top: 10px;">
          </div>
        </a>
      </div>
      
    </div>
  </div>
</section>

<!-- Anatomy Section -->
<?php $anatomy = get_field('anatomy_section'); ?>
<section class="bg-white padding-medium remove-padding-mobile">
  <span id="anatomy"></span>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-12">
        <h3 class="mb-0"><?php echo $anatomy['section_title']; ?></h3>
        <div class="anatomy-img-wrap pt1">
          <img src="<?php echo $anatomy['section_image']['url']; ?>" alt="<?php echo $anatomy['section_image']['alt']; ?>" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Strategy Section -->
<?php $strategy = get_field('strategy_section'); ?>
<section class="bg-white padding-medium">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6">
        <div class="card">
          <h3 class="max-width-desktop"><?php echo $strategy['section_title']; ?></h3>
          <?php echo $strategy['section_text']; ?>
        </div>
      </div>
      <div class="col-12 col-lg-5 offset-lg-1">
        <img src="<?php echo $strategy['section_image']['url']; ?>" alt="<?php echo $strategy['section_image']['url']; ?>" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="bg-ltgrey padding-medium" id="processSection">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col">
        <h2><?php echo get_field('process_section_title'); ?></h2>
      </div>
    </div>
    
    <?php while(have_rows('process_section')): the_row(); ?>
      <div class="row align-items-center pt2" id="processRow">
        <div class="col-12 col-lg-5 process-col-text">
          <h3><?php echo get_sub_field('section_title'); ?></h3>
          <?php echo get_sub_field('section_text'); ?>
        </div>
        <div class="col-12 col-lg-7">
          <div class="process-img-wrap">
            <?php $process_img = get_sub_field('section_image'); ?>
            <img src="<?php echo $process_img['url']; ?>" alt="<?php echo $process_img['alt']; ?>" class="img-fluid process-img">
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<!-- Social Proof Section -->
<section class="bg-white padding-medium">
  <div class="container">
    <div class="row text-center justify-content-center">
      <div class="col">
        <h2><?php echo get_field('testimonial_section_title'); ?></h2>
      </div>
    </div>

    <div class="row justify-content-center pt1">

      <?php while(have_rows('testimonial_section')): the_row(); ?>
        <div class="col-12 col-lg-4">
          <div class="card card-testimonials">
            <?php $logo = get_sub_field('testimonial_logo'); ?>
            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="client-logo">
            <?php echo get_sub_field('testimonial_text'); ?>

            <div class="social-card-profile">
              <?php while(have_rows('testimonial_client')): the_row(); ?>
                <?php $client_image = get_sub_field('client_image'); ?>
                <img src="<?php echo $client_image['url']; ?>" alt="<?php echo $client_image['alt']; ?>">
                <div class="client-meta">
                  <p class="client-name"><?php echo get_sub_field('client_name'); ?></p>
                  <p class="client-position"><?php echo get_sub_field('client_position'); ?></p>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

    </div>
  </div>
</section>

<?php
get_footer('smb');