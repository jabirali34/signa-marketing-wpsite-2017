<?php

/**
 *
 * Template Name: Client Podcast Submission Template
 * 
 * page should be no-index 
 * page url: /onboard-form
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
acf_form_head();
get_header('none');

?>
<!-- Hero -->
<div class="service-banner banner">
  <div class="banner-service-filter"></div>
  <div class="banner-service-content-wrapper">
    <div class="container">
      <div class="row">
        <header class="entry-header service-intro">
          <?php the_title('<h1 class="entry-title service-heading">', '</h1>'); ?></header>
          <?php 
            $introContent = get_sub_field('text');

            echo $introContent;
          ?>
      </div>
    </div>
  </div>
</div>

<!-- Content -->
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content">

        <div class="f-cotnent-row">
          <div class="f-content-container contain-text">
            <p style="margin-bottom: 35px;text-align:center;">Submit your recorded podcast episode to your Signa Audio Production Team for post editing and publishing.</p>
            <h2>Episode Details</h2>

            <div id="primary" class="content-area">
              <div id="content" class="site-content" role="main">
                <?php
                // Load the form
                acf_form('new-podcast-episode');
                ?>
              </div><!-- #content -->
            </div><!-- #primary -->

          </div>
        </div>

      </div>
    </article>

  </main><!-- #main -->
</div><!-- #primary -->

<script>
  var textarea = document.querySelector("#apple-description-content textarea");

  appleDescriptionWrapper = document.querySelector("#apple-description-content");
  var node = document.createElement("div"); // Create a <li> node
  node.id = "allowed_limit";
  node.style.width = "100%";
  node.style.opacity = "0.6";
  node.style.fontSize = "16px";
  node.style.textAlign = "center";

  node.innerText = "0/512 Characters";
  if (appleDescriptionWrapper != null) {
    appleDescriptionWrapper.appendChild(node);
  }

  textarea.addEventListener("input", function() {
    var maxlength = this.getAttribute("maxlength");

    var currentLength = this.value.length;
    if (maxlength != null) {
      node.innerText = currentLength + "/" + maxlength;
    }
    if (currentLength >= maxlength) {
      node.style.opacity = "1";
      node.style.color = "#ff8644";
    } else if (currentLength >= maxlength - 50) {
      node.style.opacity = "0.8";
      node.style.color = "#ff8644";
    } else {
      node.style.opacity = "0.6";
      node.style.color = "inherit";
    }
  });
</script>

<?php
get_footer('none');
