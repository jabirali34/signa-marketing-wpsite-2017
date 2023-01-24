<div class="what-we-are-container amp-content-center-what-we-do">
  <div class="f-content-container no-p-t no-p-b">
  
    <h3><?php echo get_field('capabilities_title'); ?></h3>
    <p class="quote-line no-m-t mb-2"><?php echo get_field('capabilities_subtitle'); ?></p>

    <!-- Capabilities -->
    <div class="what-capabilities">
      <?php while(have_rows('capabilities')) : the_row();
        // vars
        $capability_image = get_sub_field('capability_background_image');
        $capability_link = get_sub_field('capability_link');

        $base_url = $capability_image;
      ?>
      <div class="capabilities-col equal-height" data-aos="fade-up">
        <a href="<?php echo $capability_link; ?>">
          <div class="what-we-do-tile-padding">
            <span><?php echo the_sub_field('capability_title'); ?></span>
          </div>

          <div class="capabilities-bg-img b-lazy" data-src="<?php echo $base_url; ?>|<?php echo get_retina_url($base_url); ?>" style="background-repeat: no-repeat; background-position: top center; background-size: cover;"></div>

        </a>
        <!-- <a href="<?php echo $capability_link; ?>"></a> -->
      </div>


      <?php endwhile; ?>
    </div>

    <h3><?php echo get_field('specializations_title'); ?></h3>
    <p class="quote-line no-m-t mb-2"><?php echo get_field('specializations_subtitle'); ?></p>

    <!-- Specializations -->
    <div class="who-specialize">
      <?php while(have_rows('specializations')) : the_row();
        // vars
        $specialization_image = get_sub_field('specialization_image');
        $specialization_link = get_sub_field('specialization_link');

        unset($base_url);  //unset var previously set on page
        $base_url = $specialization_image;
      ?>
      <div class="special-col equal-height" data-aos="fade-up">
        <a href="<?php echo $specialization_link; ?>">
          <div class="what-we-do-tile-padding">
            <span><?php echo the_sub_field('specialization_title'); ?></span>
          </div>

          <div class="special-bg-img b-lazy" data-src="<?php echo $base_url; ?>|<?php echo get_retina_url($base_url); ?>" style="background-repeat: no-repeat; background-position: top center; background-size: cover;"></div>


        </a>
        <a href="<?php echo $specialization_link; ?>"></a>
      </div>
      <?php endwhile; ?>
    </div>

  </div>
</div>