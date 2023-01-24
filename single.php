<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Signa_2017
 */

get_header(); ?>

  <section class="bg-blog-hero padding-medium margin-header">
    <div class="blog-container">

      <?php 
        if(is_singular('post')) {
          get_template_part('template-parts/content', 'socialshare');
        }
      ?>

      <div class="blog-row">
        <div class="blog-half">
          <?php the_title( '<h1 class="blog-entry-title">', '</h1>' ); ?>

          <!-- author meta -->

          <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta blog-entry-meta">
          
              <div class="blog-photo-meta">
                <?php 
                  function my_display_gravatar() { 
                    // Get User Email Address
                    $getuseremail = get_the_author_meta('user_email');
              
                    // Convert email into md5 hash and set image size to 200 px
                    $usergravatar = 'https://www.gravatar.com/avatar/' . md5($getuseremail) . '?s=90';
                    echo '<img src="' . $usergravatar . '" class="wpb_gravatar blog-gravatar" />';
                  } 
                  echo my_display_gravatar();
                ?>
              </div>

              <div class="blog-text-meta">

                <div class="blog-author-name"><?php echo the_author_meta('display_name'); ?></div>
                <div class="blog-post-date">
                  <?php 
                    $post_date = get_the_date( 'F j, Y' ); 
                    $lastupdated = get_field('display-last-updated');

                    if($lastupdated) {

                      // show last updated date
                      $u_time = get_the_time('U'); 
                      $u_modified_time = get_the_modified_time('U');
                      if ($u_modified_time >= $u_time + 86400) {
                        the_modified_time('F jS, Y'); 
                      }

                    } else {
                      echo $post_date;
                    }
                  ?>
                </div>

                <div>
                  <div class="reading-time"></div>
                </div>
                  
              </div>

              


            </div><!-- .entry-meta -->
          <?php endif; ?>

        </div>
        <div class="blog-half">
          <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" class="img-fluid" loading="lazy">
        </div>
      </div>
    </div>
  </section>

	<div id="primary" class="blog-content-area">
		<main id="main" class="site-main" role="main">

		<?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'blog' );

      endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>