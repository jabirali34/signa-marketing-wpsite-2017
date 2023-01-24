<?php
/**
 *Template Name: Colored Header
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'coloredheader' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

    <div class="lead-form-wrapper">
        <h2>Ready to Make Some Business Gainz?</h2>
        <div class="lead-form"><?php gravity_form( 3, false, false, false, '', false ); ?></div>
    </div>

<?php
get_footer();
