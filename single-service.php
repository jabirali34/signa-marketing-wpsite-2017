<?php
/**
 *
 * Template Name: Single Service
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>
<div class="service-banner banner">
    <div class="banner-service-filter"></div>
    <div class="banner-service-content-wrapper">
        <div class="container">
            <div class="row">
                <header class="entry-header service-intro">
                    <?php the_title( '<h1 class="entry-title service-heading">', '</h1>' ); ?> </header>
            </div>
        </div>
    </div>
    <!-- #banner-service-content-wrapper -->
</div>
<!-- #service-banner -->
<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'service' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php if (is_page(array( 5, 7, 9, 62 ) )){
    get_template_part('template-parts/testimonials', 'testimonials' ); ?>
    <script type="text/javascript" src="/wp-content/uploads/js/testimonials.js" defer></script>
<?php }
    else{/*Do nothing */} ?>
    <div class="lead-form-wrapper">
        <h2>Work With Us</h2>
        <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
    </div>

<?php get_footer(); ?>