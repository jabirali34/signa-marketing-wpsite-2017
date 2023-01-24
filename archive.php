<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
                <header class="entry-header service-intro" data-aos="fade-up">

                    <!-- Page Title -->
                    <h1 class="entry-title service-heading">TIP & INSIGHTS BLOG</h1>

                    <!-- Subtext -->
                    <p id="amp-font-size">"Creativity is intelligence having fun." – Albert Einstein</p>

                    <!-- Breadcrumbs -->
                    <div>
                        <?php
                            if (function_exists('yoast_breadcrumb') ) {
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


    <?php if(is_category()){
		$cat = get_category( get_query_var( 'cat' ) );
		$category = $cat->slug;	
	?>
    <?= do_shortcode('[ajax_load_more pause="false" posts_per_page="8" button_label="Load more" 
                            button_loading_label="Loading..." scroll="false" category="'.$category.'"]');
    ?>
    <?php } else {
        do_shortcode('[ajax_load_more pause="false" posts_per_page="8" button_label="Load more" 
        button_loading_label="Loading..." scroll="false"]');
    }
 ?>
</div>

<!-- AJAX Loader with Pagination Fallback -->
<div class="navigation-load-btn">
    <div class="nav-links">
        <?php //  the_posts_pagination(); ?>
    </div>
</div>

<?php get_footer(); ?>