<?php if(have_rows('image_list')): ?>
  <div class="f-content-row <?php if(is_page(58) || is_page(56)) { echo 'bg-ltblue'; } ?>">
    <div class="f-content-container">

      <div class="section-intro">
        <?php if(get_field('image_list_title')): ?>
          <h2 class="tx-center"><?php echo get_field('image_list_title'); ?></h2>
        <?php endif; ?>

        <?php if(get_field('image_list_subtitle')): ?>
          <p class="tx-center contain-text"><?php echo get_field('image_list_subtitle'); ?></p>
        <?php endif; ?>
      </div>
      

      <!-- Repeater -->
      <?php while(have_rows('image_list')): the_row(); ?>
        <?php 
          // vars 
          $list_image = get_sub_field('list_image'); // array
          $list_title = get_sub_field('list_title'); // text
          $list_content = get_sub_field('list_content'); // wsywig
          $ilImageMaxWidth = get_sub_field('il_image_width');
          if ($ilImageMaxWidth === '') {
              $ilMaxWidth = 'width: 100%; max-width: 450px;';
          } else {
              $ilMaxWidth = 'width: 100%; max-width: ' . $ilImageMaxWidth . 'px;';
          }
        ?>
        <div class="f-content-row" style="padding: 40px 0; align-items: center;">
          <div class="f-col-30 tx-center f-p-r">
            <img src="<?php echo $list_image['url']; ?>" alt="<?php echo $list_image['alt']; ?>" style="<?php echo $ilMaxWidth; ?>margin-bottom: 10px;">
          </div>
          <div class="f-col-60 f-center">
            <h3 style="margin-top:0px;"><?php echo $list_title; ?></h3>
            <p><?php echo $list_content; ?></p>
          </div>
        </div>
      <?php endwhile; ?>

    </div>
  </div>
<?php endif; ?>