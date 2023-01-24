<div class="blog-bar">
  <div class="blog-tabs">
    <span class="topics-toggle">Topics:</span>

    <a href="/blog/">All</a>
    <a href="/category/branding/">Branding</a>
    <a href="/category/digital-marketing/">Digital Marketing</a>
    <a href="/category/websites/">Websites</a>
  </div>

  <div class="blog-mobile-toggle">
    TOPICS: 
    <a href="javascript:" onclick="showCatsMobile()">
      <?php if(is_archive() || is_home()) { echo 'All'; } else { echo single_cat_title(); } ?>
      <img src="/wp-content/themes/signa-2017/images/icons/sort-solid.svg" aria-hidden="true" width="10">
    </a>
  </div>

  <div class="blog-sidebar">
    <div class="search-form-mobile">
      <input style="width:28px;" type="image" src="/wp-content/uploads/search-bar-icon.png" alt="Show Search Form" onclick="showSearchMobile()" />
    </div>

    <div class="search-desktop">
      <?php get_search_form(); ?>
    </div>
  </div>

  <!-- Mobile Hidden Content -->
  <ol class="mobile-tabs-items" id="mobileTabsItems">
    <li><a href="/blog/">All</a></li>
    <li><a href="/category/branding/">Branding</a></li>
    <li><a href="/category/digital-marketing/">Digital Marketing</a></li>
    <li><a href="/category/websites/">Websites</a></li>
  </ol>

  <div class="blog-sidebar-output" id="mobileBlogSearchForm">
    <?php get_search_form(); ?>
  </div>
</div>