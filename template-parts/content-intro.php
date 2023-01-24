<!-- Intro Content -->
<div class="f-content-row">
  <div class="f-content-container tx-center contain-text <?php if(is_page('what-we-do')) { echo 'padding-bottom-none'; } ?>">
    <?php $intro_content = get_field('intro_content'); ?>

    <p><?php echo $intro_content['text']; ?></p>

    <?php if($intro_content['button_text']): ?>
      <a href="<?php echo $intro_content['button_link']; ?>" class="green-learn-button"><?php echo $intro_content['button_text']; ?></a>
    <?php endif; ?>

    <!-- What we do page modal -->
    <?php if(is_page('what-we-do')): ?>
      <div class="tx-center mt-2">
        <input class="green-learn-button what-we-do-lightbox" onclick="openModal()" value="Get Started" type="submit">
      </div>
    <?php endif; ?>
  </div>
</div>