<?php

/**
 * Signa 2017 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Signa_2017
 */

if (!function_exists('signa_2017_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function signa_2017_setup()
    {
        /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Signa 2017, use a find and replace
	 * to change 'signa-2017' to the name of your theme in all the template files.
	 */
        load_theme_textdomain('signa-2017', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
        add_theme_support('title-tag');

        /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'signa-2017'),
            'secondary' => esc_html__('Secondary', 'signa-2017'),
        ));

        /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('signa_2017_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif;
add_action('after_setup_theme', 'signa_2017_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function signa_2017_content_width()
{
    $GLOBALS['content_width'] = apply_filters('signa_2017_content_width', 640);
}
add_action('after_setup_theme', 'signa_2017_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function signa_2017_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'signa-2017'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'signa-2017'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Recent Posts Widget',
        'id' => 'recent-posts-widgets',
        'description' => 'This Widget shows recent posts',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'signa_2017_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function signa_2017_scripts()
{
    // wp_enqueue_style( 'signa-2017-style', get_stylesheet_uri() );

    // Blog Scripts 
    if (is_single()) {
        wp_enqueue_script('countable', get_template_directory_uri() . '/js/countable.js', array(), false, true);
    }

    // Global
    //wp_enqueue_script( 'retina', get_template_directory_uri() . '/js/retina.min.js', array(), '20190711', true);
    wp_enqueue_script('signa-2017-scripts', get_template_directory_uri() . '/js/script.js', array(), '20190208', true);
    wp_enqueue_script('slf', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20190208', true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-custom.js', array(), '20190208', true);

    if (is_front_page() || is_home()) {
        wp_enqueue_script('phone-formatter', get_template_directory_uri() . '/js/phoneNumber-formatter.js', array(), '20200709', true);
    }
}
add_action('wp_enqueue_scripts', 'signa_2017_scripts');

/**
 * Defer Scripts
 */
function add_defer_attribute($tag, $handle)
{
    // add script handles to the array below
    $scripts_to_defer = array(
        'signa-2017-scripts',
        'slf'
    );

    foreach ($scripts_to_defer as $defer_script) {
        if ($defer_script === $handle) {
            return str_replace(' src', ' defer="defer" src', $tag);
        }
    }
    return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

// function defer_parsing_of_js ( $url ) {
// 	if ( FALSE === strpos( $url, '.js' ) ) return $url;
// 	if ( strpos( $url, 'jquery.js' ) ) return $url;
// 	return "$url' defer ";
// }
// add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

/**
 * Enable Thumbnail in posts loop on blog page
 */
add_theme_support('post-thumbnails');
/*limit excerpt word length*/
function custom_excerpt_length($length)
{
    return 26;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
/*gravity form hide label when placeholders are active*/
add_filter('gform_enable_field_label_visibility_settings', '__return_true');
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



/*
* Yoast SEO Disable Automatic Redirects for
* Posts And Pages
* Credit: Yoast Development Team
* Last Tested: May 09 2017 using Yoast SEO Premium 4.7.1 on WordPress 4.7.4
*/
add_filter('wpseo_premium_post_redirect_slug_change', '__return_true');

/**
 * remove wp automatic formatting in posts and pages visual editor
 */
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');


// /**
//  * Force GFORM Scripts inline next to Form Output
//  *
//  * force the script tags inline next to the form. This allows
//  * us to regex them out each time the form is rendered.
//  * 
//  * see strip_inline_gform_scripts() function below
//  * which implements the required regex
//  */
// function force_gform_inline_scripts() {
// 	return false;
// }
// add_filter("gform_init_scripts_footer", "force_gform_inline_scripts");

// /**
// * Strip out GForm Script tags
// *
// * note: this diables post and pre render hooks which are triggered
// * when the form renders so if you need these then it's important
// * to manually re-add them in your compiled JS source code
// */
// function strip_inline_gform_scripts( $form_string, $form ) {
// return $form_string = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $form_string);
// }
// add_filter("gform_get_form_filter", "strip_inline_gform_scripts", 10, 2);

/**
 * Add password field to gravity forms
 */
add_filter('gform_enable_password_field', '__return_true');

/**
 * Restrict access to the administration screens.
 *
 * Only administrators will be allowed to access the admin screens,
 * all other users will be automatically redirected to
 * 'example.com/path/to/location' instead.
 *
 * We do allow access for Ajax requests though, since these may be
 * initiated from the front end of the site by non-admin users.
 */
function restrict_admin_with_redirect()
{

    $user = wp_get_current_user();
    $redDom = get_site_url();
    $redPath = '/onboard-form';
    if (in_array('client', (array) $user->roles) && (!wp_doing_ajax())) {
        wp_safe_redirect($redDom . $redPath); // Replace this with the URL to redirect to.
        exit;
    }
}

add_action('admin_init', 'restrict_admin_with_redirect', 1);

/**
 * Redirect users away from /wp-admin if they are not admin
 */
function redirect_away_from_admin()
{
    if (is_user_logged_in() && is_admin()) {
        global $current_user;
        wp_get_current_user();
        $user_info = get_userdata($current_user->ID);
        if ($user_info->wp_user_level == 0) {
            header('Location: ' . get_bloginfo('home') . '/?redirect=' . get_bloginfo('home') . '/wp-admin/');
        }
    }
}

/** 
 * Remove lost password text from /wp-login
 */
function remove_lostpassword_text($text)
{
    if ($text == 'Lost your password?') {
        $text = '';
    }
    return $text;
}
add_filter('gettext', 'remove_lostpassword_text');

/**
 * Remove text to reset password when user gets password wrong 
 */
add_action('admin_head', 'custom_remove_reset_password');
function custom_remove_reset_password()
{
    echo '<style>#login_error {display: none;}</style>';
}

/**
 * Password Protect Pages
 */
function my_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o = '<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    ' . __("To view this protected post, enter the password below:") . '
    <label for="' . $label . '">' . __("Password:") . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__("Submit") . '" />
    </form>
    ';
    return $o;
}
add_filter('the_password_form', 'my_password_form');

/**
 * Hide admin bar for all users except for admin 
 */
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

// Change "20" to the Form ID and "8" to the Field ID. You will now run a function for this field when the form is submitted
add_filter("gform_field_validation_20_10", 'gf_validate_website', 10, 4);

// http://www.gravityhelp.com/documentation/page/Gform_field_validation
//value is the input entered by the user
function gf_validate_website($result, $value, $form, $field)
{
    // Validate the value
    $domainValues = array('.com', '.org', '.net', '.gov', '.edu');

    for ($i = 0; $i < count($domainValues); $i++) {
        $checkForDomainValue = strpos($value, $domainValues[$i]);

        if ($checkForDomainValue == false) {
            $result['is_valid'] = false;
            $result['message'] = 'Please enter a valid domain name';
        } else {
            $result['is_valid'] = true;
            break;
        }
    }

    return $result;
}

function featuredtoRSS($content)
{
    global $post;
    if (has_post_thumbnail($post->ID)) {
        $content = '<div>' . get_the_post_thumbnail($post->ID, 'large', array('style' => 'margin-bottom: 15px;')) . '</div>' . $content;
    }
    return $content;
}

add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

function wpassist_remove_block_library_css()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css');

// testing Jetpack CSS removal - might require more filters
add_filter('jetpack_sharing_counts', '__return_false', 99);
add_filter('jetpack_implode_frontend_css', '__return_false', 99);




add_filter('gform_submit_button', 'popup_form_add_onclick', 21, 2);
function popup_form_add_onclick($button, $form)
{
    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $button);
    $input = $dom->getElementsByTagName('input')->item(0);
    $onclick = $input->getAttribute('onclick');
    $onclick .= " submitAndClose();"; // Here's the JS function we're calling on click.
    $input->setAttribute('onclick', $onclick);
    return $dom->saveHtml($input);
}

add_filter('auto_update_plugin', '__return_false');

add_action('acf/init', 'my_acf_form_init');
function my_acf_form_init()
{

    // Check function exists.
    if (function_exists('acf_register_form')) {
        // Check function exists.
        if (function_exists('acf_register_form')) {

            $fields = array(
                'field_5fb2cb49e65de',  // Company Name
                'field_5f9885323c0e1',  // Company Email
                'field_5fb7f9b9bc4c5',  // Episode Title
                'field_5f9885503c0e2',  // Description
                'field_5f9885913c0e3',  // Apple Description (512 char max)
                'field_5fa69ed6c1364',  // Content Links
                'field_607642760fa3a',  // Release Date
                'field_5f98865e3c0e5',  // Audio Description & File (Repeater)
                'field_5fdabb9383b88'   // Notes 
            );

            // Register form.
            acf_register_form(array(
                'id'          => 'new-podcast-episode',
                'post_id'        => 'new_post',
                'return'    => home_url('podcast-submission-success'),
                'new_post' => array(
                    'post_type' => 'podcast-episodes',
                    'post_status' => 'publish',
                ),
                'post_title'    => false,
                'post_content'    => false,
                'uploader'        => 'basic',
                'fields'        => $fields,
                'html_submit_button'  => '<p style="margin-top: 20px;max-width: 740px;text-align: center;">Please be patient when uploading large files. Keep this page open until the upload is complete.</p><input type="submit" id="custom-acf-form-btn" value="%s" />',
                'submit_value'    => 'Submit Podcast Episode'
            ));
        }
    }
}


/**
 * Saving Custom fields into post fields acf_forms 
 */
add_action('acf/pre_save_post', 'acf_review_before_save_post', -1);

function acf_review_before_save_post($post_id)
{
    if (empty($_POST['acf']))
        return;
    $_POST['acf']['_post_title'] = $_POST['acf']['field_5fb7f9b9bc4c5'];
    return $post_id;
}


add_action('acf/save_post', 'new_podcast_episode_send_email');

function new_podcast_episode_send_email($post_id)
{
    if (get_post_type($post_id) !== 'podcast-episodes') {
        return;
    }
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: <' . get_field('podcast_business_email', $post_id) . '>'
    );

    $subject     = "New Podcast Episode - " . get_the_title($post_id);

    // Get and format the fields entered.
    $messageBody = acf_email_body_template($post_id);

    // Send emails to admin
    $emails = array(
        'jacob@signamarketing.com'
        // 'team1@signamarketing.com',
        // 'ruben@signamarketing.com'
    );

    foreach ($emails as $email) {
        wp_mail($email, $subject, $messageBody, $headers);
    }
}


// /**
//  * Builds the content of an email for new Podcast episodes submitted by a client.
//  *
//  * @param [type] $post_id
//  * @return void
//  */
function acf_email_body_template($post_id)
{

    $style = '<style>* {font-family: \'Helvetica\'; line-height: 1.4;} h3 {margin-top: 30px; margin-bottom: 0px !important;} p { margin-top:5px !important;} ul li {margin-top: 4px;margin-bottom:12px;} {margin-bottom: 18px;}</style>';

    $podcast_company_name = get_field('episode_client_company_name', $post_id);
    $podcast_business_email = get_field('podcast_business_email', $post_id);
    $title = get_the_title($post_id);
    $description = nl2br(get_field('podcast_episode_description', $post_id));
    $apple_description = nl2br(get_field('podcast_episode_apple_description', $post_id));
    $link_rows = get_field('podcast_content_links', $post_id);
    $release_date = get_field('release_date', $post_id);

    $links = '<ol>';
    if ($link_rows) {
        foreach ($link_rows as $link) {
            $link_info = sprintf(
                '<li>
					%1$s  
					<ul style="text-decoration: none !important;">
						<li><a href="%2$s">%2$s</a></li>
					</ul>
				</li>',
                $link['podcast_text_for_link'],
                $link['podcast_link_for_text']
            );
            $links .= $link_info;
        }
    }
    $links .= '</ol>';


    $file_rows = get_field('podcast_episode_audio_files', $post_id);

    $files = '<ol>';
    if ($file_rows) {
        foreach ($file_rows as $file) {
            $file_info = sprintf(
                '<li>
					%1$s  
					<ul style="text-decoration: none !important;">
						<li><a href="' . home_url('/wp-content/uploads/download.php?file=%3$s') . '">%3$s</a></li>
					</ul>
				</li>',
                $file['podcast_episode_file_description'],
                $file['podcast_episode_file']['url'],
                $file['podcast_episode_file']['title']
            );
            $files .= $file_info;
        }
    }
    $files .= '</ol>';

    $special_instructions =  get_field('podcast_episode_special_instructions', $post_id);


    $message = __('
		<h1>Episode Details</h1>
		<p><b>Client Company Name</b>: %1$s</p>
		<p><b>Client Email Address</b>: <a href="mailto:%1$s">%2$s</a></p>
		<h3> Episode Title</h3> <p>%3$s</p>
		<h3>Episode Description</h3><p>%4$s</p>
		<h3>Episdoe Apple Description</h3><p>%5$s</p>
		<h3>Content Links</h3><p>%6$s</p>
		<h3>Submitted Files</h3>%7$s<br>
		<h3>Special Instructions</h3>%8$s<br>
		<h3>Release Date</h3>%9$s<br>
	');

    $formattedBody = sprintf(
        $style . $message,
        $podcast_company_name,
        $podcast_business_email,
        $title,
        $description,
        $apple_description,
        $links,
        $files,
        $special_instructions,
        $release_date
    );

    return $formattedBody;
}

function cptui_register_my_cpts_podcast_episodes()
{

    /**
     * Post Type: Podcast Episodes.
     */

    $labels = [
        "name" => __("Podcast Episodes", "signa-2017"),
        "singular_name" => __("Podcast Episode", "signa-2017"),
        "menu_name" => __("Podcast Episodes", "signa-2017"),
        "all_items" => __("All Podcast Episodes", "signa-2017"),
        "add_new" => __("Add new", "signa-2017"),
        "add_new_item" => __("Add new Podcast Episode", "signa-2017"),
        "edit_item" => __("Edit Podcast Episode", "signa-2017"),
        "new_item" => __("New Podcast Episode", "signa-2017"),
        "view_item" => __("View Podcast Episode", "signa-2017"),
        "view_items" => __("View Podcast Episodes", "signa-2017"),
        "search_items" => __("Search Podcast Episodes", "signa-2017"),
        "not_found" => __("No Podcast Episodes found", "signa-2017"),
        "not_found_in_trash" => __("No Podcast Episodes found in trash", "signa-2017"),
        "parent" => __("Parent Podcast Episode:", "signa-2017"),
        "featured_image" => __("Featured image for this Podcast Episode", "signa-2017"),
        "set_featured_image" => __("Set featured image for this Podcast Episode", "signa-2017"),
        "remove_featured_image" => __("Remove featured image for this Podcast Episode", "signa-2017"),
        "use_featured_image" => __("Use as featured image for this Podcast Episode", "signa-2017"),
        "archives" => __("Podcast Episode archives", "signa-2017"),
        "insert_into_item" => __("Insert into Podcast Episode", "signa-2017"),
        "uploaded_to_this_item" => __("Upload to this Podcast Episode", "signa-2017"),
        "filter_items_list" => __("Filter Podcast Episodes list", "signa-2017"),
        "items_list_navigation" => __("Podcast Episodes list navigation", "signa-2017"),
        "items_list" => __("Podcast Episodes list", "signa-2017"),
        "attributes" => __("Podcast Episodes attributes", "signa-2017"),
        "name_admin_bar" => __("Podcast Episode", "signa-2017"),
        "item_published" => __("Podcast Episode published", "signa-2017"),
        "item_published_privately" => __("Podcast Episode published privately.", "signa-2017"),
        "item_reverted_to_draft" => __("Podcast Episode reverted to draft.", "signa-2017"),
        "item_scheduled" => __("Podcast Episode scheduled", "signa-2017"),
        "item_updated" => __("Podcast Episode updated.", "signa-2017"),
        "parent_item_colon" => __("Parent Podcast Episode:", "signa-2017"),
    ];

    $args = [
        "label" => __("Podcast Episodes", "signa-2017"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => false,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => false,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "podcast-episodes", "with_front" => false],
        "query_var" => true,
        "supports" => ["title", "editor"],
    ];

    register_post_type("podcast-episodes", $args);
}

add_action('init', 'cptui_register_my_cpts_podcast_episodes');


/**
 * Shorten Sentence & Add Ellipsis (...) to the End. Call function wherever needed in source.
 *
 * @param string $text_to_shorten the text that should be restrained to certain length
 * @param int $character_length
 * @return string
 */
function shorten_text_to_length($text_to_shorten, int $character_length)
{
    $shortened_title = strlen($text_to_shorten) > ($character_length) ? substr($text_to_shorten, 0, strpos($text_to_shorten, ' ', $character_length - 10)) . "..." : $text_to_shorten;

    return $shortened_title;
}



/**
 * Spits out style element, assigning background-image to the specified class.
 */
function get_thumbnail_styles($thumb_url, $cssSelector)
{
    $regularStyle =
        '<style>' .
        $cssSelector . ' {
			background-image: url(' . $thumb_url . ') !important;
		}
		</style>';

    return $regularStyle;
}

/**
 * Formats the blog post title as needed and limits the number of characters (~60)
 *
 * @param string $title the podcast title.
 * @return string returns the shortened title. Returns empty string if data can't be parsed.
 */
function format_featured_podcast_title(string $title)
{
    if ($title != null && !empty($title)) {
        if (strpos($title, '|') != false) {
            $titleArray = explode(' | ', $title);
            // if (is_array($titleArray) && count($titleArray) > 1) { need to test this to confirm it is acurate
                $formattedTitle = str_replace('#', '', $titleArray[1]) . ': ' . $titleArray[0];
                $title = $formattedTitle;
            // }

            return shorten_text_to_length($title, 60);
        } else {
            return $title;
        }
    } else {
        return '';
    }
}


