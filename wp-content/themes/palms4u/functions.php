<?php
/**
 * palms4u functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package palms4u
 */

if ( ! function_exists( 'palms4u_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function palms4u_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on palms4u, use a find and replace
	 * to change 'palms4u' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'palms4u', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'palms4u' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'palms4u_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'palms4u_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function palms4u_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'palms4u_content_width', 640 );
}
add_action( 'after_setup_theme', 'palms4u_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function palms4u_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'palms4u' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'palms4u' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'palms4u_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function palms4u_scripts() {
	// wp_enqueue_style( 'palms4u-style', get_stylesheet_uri() );

	wp_enqueue_style( 'palms4u-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );

	wp_enqueue_style( 'palms4u-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'palms4u-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700');

	wp_enqueue_style( 'palms4u-animate', get_template_directory_uri() . '/css/animate.css');

	wp_enqueue_style( 'palms4u-custom-style', get_template_directory_uri() . '/css/main.css');

	wp_enqueue_script( 'palms4u-jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js', false, array(), false, false );

	wp_enqueue_script( 'palms4u-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), '3.3.6', true );

	wp_enqueue_script( 'palms4u-waypoints-js', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js?ver=20151215', array(), '3.3.6', true );

	wp_enqueue_script( 'palms4u-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'palms4u-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'palms4u-main-js', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'palms4u_scripts' );

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
