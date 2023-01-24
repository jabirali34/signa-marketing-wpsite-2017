<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" id="blogSearchForm">
  <label>
    <input type="image" class="search-submit" src="/wp-content/uploads/search-bar-icon.png" alt="Submit Form" />
    <span class="screen-reader-text">Search for:</span>
    <input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:" />
    <input type="hidden" name="post_type" value="post" />
  </label>
</form>