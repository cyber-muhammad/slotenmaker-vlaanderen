<?php
/**
 * slotenmaker-vlaanderen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package slotenmaker-vlaanderen
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function slotenmaker_vlaanderen_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on slotenmaker-vlaanderen, use a find and replace
		* to change 'slotenmaker-vlaanderen' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'slotenmaker-vlaanderen', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'slotenmaker-vlaanderen' ),
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
			'slotenmaker_vlaanderen_custom_background_args',
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
add_action( 'after_setup_theme', 'slotenmaker_vlaanderen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function slotenmaker_vlaanderen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'slotenmaker_vlaanderen_content_width', 640 );
}
add_action( 'after_setup_theme', 'slotenmaker_vlaanderen_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function slotenmaker_vlaanderen_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'slotenmaker-vlaanderen' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'slotenmaker-vlaanderen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'slotenmaker_vlaanderen_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function slotenmaker_vlaanderen_scripts() {
	wp_enqueue_style( 'slotenmaker-vlaanderen-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'slotenmaker-vlaanderen-style', 'rtl', 'replace' );

	wp_enqueue_script( 'slotenmaker-vlaanderen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'slotenmaker_vlaanderen_scripts' );

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

function derass_register_styles()
{
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", array(), '6.1.1', 'all');
    wp_enqueue_style('glider', "https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.css", array(), '1.7.7', 'all');
	wp_enqueue_style('aos', "https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css", array(), '2.3.4', 'all' );
	wp_enqueue_style('bootstrap5', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css", array(), '5.2.0', 'all');
}

add_action('wp_enqueue_scripts', 'derass_register_styles');

function derass_register_scripts()
{
	wp_enqueue_script('aos', "https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js", array(), '2.3.4', true);
    wp_enqueue_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '3.5.1', true);
    wp_enqueue_script('glightbox', "https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js", array(), '3.2.0', true);
    wp_enqueue_script('glider', "https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js", array(), '1.7.7', true);
	wp_enqueue_script( 'popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js', array(), '2.11.6', true);
    wp_enqueue_script('bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js", array(), '5.2.0', true);
    wp_enqueue_script('app-js', get_stylesheet_directory_uri() . '/js/app.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'derass_register_scripts');


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'primary' ),
) );

add_filter( 'nav_menu_link_attributes', 'bootstrap5_dropdown_fix' );
function bootstrap5_dropdown_fix( $atts ) {
     if ( array_key_exists( 'data-toggle', $atts ) ) {
         unset( $atts['data-toggle'] );
         $atts['data-bs-toggle'] = 'dropdown';
     }
     return $atts;
}
