<?php
/**
 *
 * Template Name: Work with us Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */ 
get_header(); ?>

<?php get_template_part('template-parts/content-workus-hero', 'content-workus-hero' ); ?>

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

<div class="workus-wrapper">
    <div class="lead-form-wrapper">
        <h4 class="form-title">Work With Us</h4>
        <p class="form-text">Do you have a question or are you interested in working with us? Fill out the form below. We look forward to speaking with you!</p>
        <div class="lead-form"><?php gravity_form( 23, false, false, false, '', false ); ?></div>
    </div>
    <div class="workus-right-content">
        <?php $rightsection_info = get_field('work_us_form_right_section'); ?>
        <h3 class="workus-title"><?php echo $rightsection_info['ws_title']; ?></h3>
        <p class="workus-text"><?php echo $rightsection_info['ws_text']; ?></p>

            <?php

            // Stop if there's nothing to display.
            if ( ! have_rows( 'work_us_form_right_section' ) ) {
                return false;
            }

            if ( have_rows( 'work_us_form_right_section' ) ) : ?>

                    <?php while ( have_rows( 'work_us_form_right_section' ) ) : the_row();

                        // Services Sub Repeater.
                        if ( have_rows( 'ws_list' ) ) : ?>

                        <ul class="list">

                            <?php
                            while ( have_rows( 'ws_list' ) ) : the_row();

                                $content = get_sub_field( 'list_item' );
                            ?>

                            <li class="list-item">
                                <?php echo $content ; ?>
                            </li>

                            <?php endwhile; ?> 
                        </ul>

                        <?php endif; ?>
                    <?php endwhile; ?>
            <?php endif; ?>
    </div>
</div>

<?php if (is_page(array( 5, 7, 9, 64, 62 ) )){
    get_template_part('template-parts/testimonials', 'testimonials' );
    }
    else{/*Do nothing */} ?>


<?php

get_footer();