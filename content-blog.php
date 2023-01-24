<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="blog-entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'signa-2017' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

/*			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'signa-2017' ),
				'after'  => '</div>',
			) );*/
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php signa_2017_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
