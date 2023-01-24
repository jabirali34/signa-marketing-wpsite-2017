<?php 
  $flopcounter = 1;
if(have_rows('content_ff')) : while(have_rows('content_ff')): the_row();
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
        $flopsectioncolor="bg-white";
        $checkcolor="orange-check";
        $btncolor="green-learn-button";

        // Blue Classes
        if($flopcounter%2==0) { 
            $flopclass="switch-left"; 
            $flopimageclass=""; 
            $flopsectioncolor="bg-ltblue"; 
            $checkcolor="green-check";
            $btncolor="btn-white";
        }
        ?>
  <div class="f-content-row <?php echo $flopsectioncolor; ?>">
    <div class="f-content-container">
      <div class="f-content-row <?php echo $flopclass; ?>">

        <div class="f-col-50 fo2 fmt-35">
          <h2><?php echo $ff_title; ?></h2>
          <p><?php echo $ff_text; ?></p>

        <?php if($ff_list) : ?>
            <h4 class="ff-list-title"><?php echo $ff_caption; ?></strong></h4>
            <ul>
              <?php foreach($ff_list as $ff_list_item): ?>
                <li class="<?php echo $checkcolor; ?>"><?php echo $ff_list_item; ?></li>
<?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if($ff_link) : ?>
            <div class="button-top-space-1">
              <a class="<?php echo $btncolor; ?>" href="<?php echo $ff_link; ?>">Learn More</a>
            </div>
        <?php endif; ?>
        </div>

        <div class="f-col-50 <?php echo $flopimageclass; ?> f-p-l fo1">
          <?php
            $ffImageWidth = get_sub_field('ff_image_width');
            if ($ffImageWidth === '') {
                $ffMaxWidth = 'width: 100%; max-width: 450px';
            } else {
                $ffMaxWidth = 'width: 100%; max-width: ' . $ffImageWidth . 'px';
            }
            ?>
            <img style="<?php echo $ffMaxWidth; ?>" src="<?php echo $ff_image['url']; ?>" alt="<?php echo $ff_image['alt']; ?>" title="<?php echo $ff_image['title']; ?>" />

        </div>

      </div>
    </div>
  </div>
        <?php 
        $flopcounter++; 
endwhile; 
endif;
?>