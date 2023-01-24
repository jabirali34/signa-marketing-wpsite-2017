<?php

/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Signa_2017
 */

get_header(); ?>

<div class="service-banner banner">
	<div class="banner-service-filter"></div>
	<div class="banner-service-content-wrapper">
		<div class="container">
			<div class="row">
				<header class="entry-header service-intro" data-aos="fade-up">

					<!-- Page Title -->
					<h1 class="entry-title service-heading">TIP & INSIGHTS BLOG</h1>

					<!-- Subtext -->
					<p id="amp-font-size">Search results for: <?php echo get_search_query(); ?></p>

					<!-- Breadcrumbs -->
					<div>
						<?php
						if (function_exists('yoast_breadcrumb')) {
							yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
						}
						?>
					</div>

				</header>
			</div>
		</div>
	</div><!-- #banner-service-content-wrapper -->
</div><!-- #service-banner -->


<!-- Blog Navigation -->
<?php get_template_part('template-parts/content-blogbar', 'content-blogbar'); ?>

<div id="primary" class="blog-content-area-2">



	<?php
	$term = sanitize_text_field($_GET['s']); // query of URL is s='search term'
	if (empty($term)) {
		$term = '';
	}

	echo do_shortcode('[ajax_load_more 
					pause="false" 
					posts_per_page="8" 
					button_label="Show More Results"
					search="' . $term . '"
					orderby="relevance"
					button_loading_label="Loading..." 
					scroll="false"]');
	?>
</div>
<?php
get_footer();
