<?php
/**
 *
 *  Template Name: Thank You for Subscribing
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
    <div id="recent-posts-widgets">
            <div id="recent-posts">
                <h2 class="tx-center">Check out our blog!</h2>
                <?php $postslist = get_posts('numberposts=3&order=DESC'); foreach ($postslist as $post) : setup_postdata($post); ?>
                <div class="recent-post-thumbnail">
                    <?php if ( has_post_thumbnail()) : ?>
                    <a title="" href=' <?php the_permalink(); ?>'>
                        <?php the_post_thumbnail(); ?> </a>
                    <?php endif; ?>
                    <span class="recent-posts-date">
                        <?php the_time('F j, Y') ?>
                    </span>
                    <a class="recent-posts-title" title='Post: <?php the_title(); ?>' href='<?php the_permalink(); ?>'>
                        <?php the_title(); ?>
                    </a>
                </div>
                <?php endforeach; ?>
                <div class="view-our-blog-btn">
                    <a class="green-learn-button" href="/blog/">View Our Blog</a>
                </div>
            </div>
            <!-- End Recent Posts -->

        </div>
    <div class="lead-form-wrapper">
        <h2>Work With Us</h2>
        <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
    </div>

<?php

get_footer();