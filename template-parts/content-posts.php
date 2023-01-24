<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */

?>
<div class="post-33-container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="post-img-box">
		<?php the_post_thumbnail(); ?>
	</div>
<!-- 		<?php signa_2017_entry_footer(); ?> -->
		<?php
			the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
		<div class="excerpt-text">
		<?php the_excerpt();?>
		 </div>
	</header><!-- .entry-header -->

	</div><!-- .entry-content -->
</article><!-- #post-## -->
</div>