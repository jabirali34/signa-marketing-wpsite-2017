<?php
/**
 *
 * Template Name: Signa Themes Landing Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header('none'); ?>

<?php if (!post_password_required()): ?>

  <!-- Hero -->
  <div class="service-banner banner">
    <div class="banner-service-filter"></div>
    <div class="banner-service-content-wrapper">
      <div class="container">
        <div class="row">
          <header class="entry-header service-intro">
          <h1 class="entry-title service-heading">Signa Themes</h1></header>
        </div>
      </div>
    </div>
  </div>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="f-content-container">
        <div class="f-content-row" style="flex-wrap:wrap;">
          <div class="signa-theme-card">
            <div class="card-container">
              <div class="card-heading">
                <img src="https://www.dev.signamarketing.com/wp-content/uploads/logo-blue-circle-white.png"
                  alt="signa-icon">
                <span>Signa Themes</span>
              </div>
              <div class="card-title">
                <h3>Theme 1</h3>
              </div>
              <div class="card-list-container">
                <ul class="card-list">
                <li class="orange-check">Small -  Medium Service Based Theme</li>
                  <li class="orange-check">Gallery Integration</li>
                  <li class="orange-check">Strong CTA Focused Pages</li>

                </ul>
                <a class="btn" target="_blank" href="http://signamarketing.net/signa-theme-1/">View Theme</a>
              </div>
            </div>
          </div>

          <div class="signa-theme-card">
            <div class="card-container">
              <div class="card-heading">
                <img src="https://www.dev.signamarketing.com/wp-content/uploads/logo-blue-circle-white.png"
                  alt="signa-icon">
                <span>Signa Themes</span>
              </div>
              <div class="card-title">
                <h3>Theme 2</h3>
              </div>
              <div class="card-list-container">
                <ul class="card-list">
                <li class="orange-check">Multi-Purpose Theme</li>
                  <li class="orange-check">Designed For Bold Impactful Images</li>
                  <li class="orange-check">Service Area Features Supported</li>
                </ul>
                <a class="btn" target="_blank" href="http://signamarketing.net/signa-theme-2/">View Theme</a>
              </div>
            </div>
          </div>

          <div class="signa-theme-card">
            <div class="card-container">
              <div class="card-heading">
                <img src="https://www.dev.signamarketing.com/wp-content/uploads/logo-blue-circle-white.png"
                  alt="signa-icon">
                <span>Signa Themes</span>
              </div>
              <div class="card-title">
                <h3>Theme 3</h3>
              </div>
              <div class="card-list-container">
                <ul class="card-list">
                  <li class="orange-check">Multi-purpose Theme</li>
                  <li class="orange-check">Fully integrated service menus</li>
                  <li class="orange-check">Multiple Location Businesses Supported</li>
                </ul>
                <a class="btn" target="_blank" href="http://signamarketing.net/signa-theme-3/">View Theme</a>
              </div>
            </div>
          </div>

          <div class="signa-theme-card">
            <div class="card-container">
              <div class="card-heading">
                <img src="https://www.dev.signamarketing.com/wp-content/uploads/logo-blue-circle-white.png"
                  alt="signa-icon">
                <span>Signa Themes</span>
              </div>
              <div class="card-title">
                <h3>Theme 4</h3>
              </div>
              <div class="card-list-container">
                <ul class="card-list">
                  <li class="orange-check">Multi-Purpose Corporate Website Theme</li>
                  <li class="orange-check">Designed to fit expanding business teams</li>
                  <li class="orange-check">Clean Modern Design</li>
                </ul>
                <a class="btn" target="_blank" href="https://signamarketing.net/signa-theme-4/">View Theme</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php else: ?>

  <section class="enter-password">
    <div class="container">
      <div class="row pp-row">
        <div class="col-xs-12">
          <img src="https://www.signamarketing.com/wp-content/uploads/Signa-logo-amp_03-e1574376005383.jpg" alt="Signa Marketing Logo" style="width: 250px; margin-bottom: 15px;">
          <h3>Please Enter Your Password</h3>
          
          <?php 
            global $post;
            $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
            $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post"><p>' . __( "To view this protected post, enter the password below:" ) . '</p><label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" /></form>';

            echo $o;
          ?>

          <style type="text/css">
            .pp-row {
              display: flex;
              justify-content: center;
              text-align: left;
              align-items: center;
              margin-top: 200px;
              padding: 0px 50px;
            }

            .pp-row h3 {
              margin-bottom: 15px;
            }

            .pp-row p {
              margin-bottom: 15px;
            }

            .pp-row label {
              width: 100%;
              display: block;
              font-weight: bold;
            }

            .pp-row input[name="post_password"] {
              border-radius: 0px !important;
              float: left;
              width: 100%;
              height: 60px;
            }

            .pp-row input[type="submit"] {
              background: #1e425d;
              border: solid 2px #1e425d;
              border-radius: 0px;
              color: #fff;
              font-weight: bold;
              padding: 20px 30px;
              text-shadow: none !important;
              outline: none !important;
              font-size: 16px;
              text-transform: uppercase;
              margin-top: 15px;
              transition: background 300ms;
            }

            .pp-row input[type="submit"]:hover {
              background:#fff;
              color: #1e425d;
            }
          </style>

        </div>
      </div>
    </div>
  </section>

<?php endif; ?>

<?php
get_footer('none');