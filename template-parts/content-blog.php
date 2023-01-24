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
		<?php the_content() ?>

		<!-- end of post content -->
		<div class="end-of-post-categories">
			<div class="end-of-post-categories-text">Categories & Tags</div>
			<div class="end-of-post-categories-separator"></div>
		</div>

		<div class="end-of-post-categories-2">
			<?php	
				if ( 'post' === get_post_type() ) {
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( esc_html__( ', ', 'signa-2017' ) );
					if ( $categories_list && signa_2017_categorized_blog() ) {
						printf($categories_list ); // WPCS: XSS OK.
					}

					/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list( '', esc_html__( ', ', 'signa-2017' ) );
					if ( $tags_list ) {
						printf('<span class="tags-links">' . esc_html__( ',  %1$s', 'signa-2017' ) . '</span>', $tags_list); // WPCS: XSS OK.
					}
				}
			?>
		</div>

		<div class="previous-next-posts">
			<div class="end-of-post-categories">
				<div class="end-of-post-categories-text">Previous & Next Posts</div>
				<div class="end-of-post-categories-separator"></div>
			</div>

			<!-- previous post -->
			<div class="single-nav-column post-33-container">
				<?php $prevPost = get_previous_post(false);
				if ($prevPost) {?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<div class="post-img-box">
							<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID);?>
							<?php previous_post_link('%link',"$prevthumbnail", false);  ?>
						</div>
						<div id="blog-date-text">
							<?php $prev_post = get_previous_post(); ?><?php echo mysql2date('F, j Y', $prev_post->post_date, false)?>
						</div>
						<div class="single-nav-title-text">
							<?php previous_post_link('%link',"<h3 class=\"post-title\">%title</h3>", false);  ?>
						</div>
					</header>
				</article><?php } ?>
			</div>

			<!-- next post -->
			<div class="single-nav-column post-33-container">
				<?php $nextPost = get_next_post(false);
				if ($nextPost) {?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<div class="post-img-box">
							<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID);?>
							<?php next_post_link('%link',"$nextthumbnail", false);  ?>
						</div>
						<div id="blog-date-text">
							<?php $next_post = get_next_post(); ?><?php echo mysql2date('F, j Y', $next_post->post_date, false)?>
						</div>
						<div class="single-nav-title-text">
							<?php next_post_link('%link',"<h3 class=\"post-title\">%title</h3>", false);  ?>
						</div>
						<?php } ?>

					</header>
				</article>
			</div>
		</div>

	</div><!-- .blog-entry-content -->
</article><!-- #post-## -->