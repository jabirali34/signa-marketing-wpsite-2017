<?php
/**
 * Template Name: Signa 2017 Blog Page Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signa_2017
 */
get_header(); ?>
	<div class="blog service-banner banner">
		<div class="banner-service-filter"></div>
		<div class="banner-service-content-wrapper">
			<div class="container">
				<div class="row">
					<header class="entry-header blog-intro">
						<h1 class="entry-title service-heading">Tip & Insights Blog</h1>
						<p><i>"Creativity is intelligence having fun." – </i>Albert Einstein</p>
					</header>
				</div>
			</div>
		</div><!-- #banner-service-content-wrapper -->
	</div><!-- #service-banner -->

	<div class="blog-bar">
		<div class="blog-tabs hidden-screen-sm">
			<span>TOPICS: </span>
			<a href="/blog/">All</a>
			<a href="/category/branding/">Branding</a>
			<a href="/category/digital-marketing/">Digital Marketing</a>
			<a href="/category/websites/">Websites</a>
		</div>

		<ul class="mobile-tabs visible-screen-sm menu-left">
			<li>TOPICS: <a href="javascript:"><?php if(is_archive() || is_home()) { echo 'All'; } else { echo single_cat_title(); } ?> <i class="fa fa-sort-down"></i></a>
				<ol class="mobile-tabs-items">
					<li><a href="/blog/">All</a></li>
					<li><a href="/category/branding/">Branding</a></li>
					<li><a href="/category/digital-marketing/">Digital Marketing</a></li>
					<li><a href="/category/websites/">Websites</a></li>
				</ol>
			</li>
		</ul>
		
		<div class="blog-sidebar">
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<label>
					<input type="image" class="search-submit" src="/wp-content/uploads/search-bar-icon.png" alt="Submit Form" />
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:" />
					<input type="hidden" name="post_type" value="post" />
				</label>
			</form>
		</div><!-- blog-sidebar -->

	</div><!-- blog-bar -->
  

	<div id="primary" class="blog-content-area-2">

		<?php

			/* Start the Loop */

			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
		?>
		
		<div class="post-33-container">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="post-img-box">
						<?php the_post_thumbnail(); ?>
					</div>
					<div id="blog-date-text"><?php echo get_the_date('F, j Y'); ?></div>
					<?php
						the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					?>
					<div class="excerpt-text">
						<?php the_excerpt();?>
					</div>
				</header><!-- .entry-header -->
			</article><!-- #post-## -->
		</div><!-- .entry-content -->
		<?php	
			endwhile; 

		?>
	</div>
	<div class="navigation-load-btn"><div class="nav-links"><?php the_posts_pagination(); ?></div></div>
<?php get_footer(); ?>