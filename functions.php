<?php
/**
 * norm_foote_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package norm_foote_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'nf_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nf_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on norm_foote_theme, use a find and replace
		 * to change 'nf_theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nf_theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'foote-note-image', 300, 200, true );
		add_image_size( 'single-foote-note-image', 500, 350, true );

		// This theme uses wp_nav_menu() in one location.
		// register social menu
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'nf_theme' ),'social' => esc_html__( 'Social Menu Location', 'nf_themem' )
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'nf_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'nf_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nf_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nf_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'nf_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nf_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nf_theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nf_theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nf_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nf_theme_scripts() {
	wp_enqueue_style( 'nf_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'nf_theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'nf_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Enqueue Swiper on the Homepage
	if (is_front_page()) {
		wp_enqueue_style(
			'swiper-styles',
			get_template_directory_uri() . '/css/swiper-bundle.css',
			array(),
			'6.6.1'
		);

		wp_enqueue_script(
			'swiper-scripts',
			get_template_directory_uri() . '/js/swiper-bundle.min.js',
			array(),
			'6.6.1',
			true
		);

		wp_enqueue_script(
			'swiper-settings',
			get_template_directory_uri() . '/js/swiper-setting.js',
			array('swiper-scripts'),
			_S_VERSION,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'nf_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* Custom Post Types & Taxonomies
*/
require get_template_directory() . '/inc/cpt-taxonomy.php';

//Adding a block template for certain pages
function nf_block_editor_templates() {
	//Photos page
    if ( isset( $_GET['post'] ) && '24' == $_GET['post'] ) {
        $post_type_object = get_post_type_object( 'page' );
        $post_type_object->template = array(
            // define blocks here...
			array( 'core/title' ),
        );
		$post_type_object->template_lock = 'all';
    }

	//Outreach page (only allowing title as we will use all ACF for content)
    if ( isset( $_GET['post'] ) && '26' == $_GET['post'] ) {
        $post_type_object = get_post_type_object( 'page' );
        $post_type_object->template = array(
            // define blocks here...
			array( 'core/title' ),
        );
		$post_type_object->template_lock = 'all';
    }

	//Symphony page (only allowing title as we will use all ACF for content)
	if ( isset( $_GET['post'] ) && '28' == $_GET['post'] ) {
		$post_type_object = get_post_type_object( 'page' );
		$post_type_object->template = array(
			// define blocks here...
			array( 'core/title' ),
		);
		$post_type_object->template_lock = 'all';
	}
}
add_action( 'init', 'nf_block_editor_templates' );

// removing "Archive:" from archive pages
add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

// // excerpt length
// function nf_custom_excerpt_length($length) {
//     global $post;
//     if ($post->post_type == 'post')
//     return 25;
//     else if ($post->post_type == 'nf-testimonial')
//     return 40;
//     else if ($post->post_type == 'nf-foote-note')
//     return 50;
//     else if ($post->post_type == 'nf-hero-slider')
//     return 60;
//     else
//     return 80;
// }
// add_filter('excerpt_length', 'nf_custom_excerpt_length');


//do we need an if statement wrapping the line inside the function?
//trims text from ACF field in hero slide to create an excerpt, must call the_excerpt where you want to output this
function acf_excerpt_hero($excerpt) {

	$my_acf_field = wp_trim_words(get_field('text'), 20);

return $my_acf_field . '' . $excerpt;
}
add_filter('the_excerpt', 'acf_excerpt_hero');

// //For Foote Notes Archive
function acf_excerpt_foote_note($excerpt) {

	$my_acf_field = wp_trim_words(get_field('text'), 30);

return $my_acf_field;
}
add_filter('the_excerpt', 'acf_excerpt_foote_note');

//Edit the Read More Link
function acf_read_more_foote_note($more){
	$more = '... <a class="read-more" href="'. get_permalink(). '">Continue Reading</a>';
	return $more;
}

add_filter('excerpt_more', 'acf_read_more_foote_note');


