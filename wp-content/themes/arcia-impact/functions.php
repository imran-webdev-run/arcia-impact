<?php
/**
 * Arcia Impact functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Arcia_Impact
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
function arcia_impact_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Arcia Impact, use a find and replace
		* to change 'arcia-impact' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'arcia-impact', get_template_directory() . '/languages' );

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
			'mainMenu' => esc_html__( 'Main Menu', 'arcia-impact'),
		)
	);

	register_nav_menus(
		array(
			'footerMenu' => esc_html__( 'Footer Menu', 'arcia-impact' ),
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
			'arcia_impact_custom_background_args',
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
add_action( 'after_setup_theme', 'arcia_impact_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function arcia_impact_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'arcia_impact_content_width', 640 );
}
add_action( 'after_setup_theme', 'arcia_impact_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function arcia_impact_scripts() {

	// google font
	wp_enqueue_style( 'google-fonts','https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap', array(), NULL, 'all' );

	// slick css
	wp_enqueue_style( 'slick-custom-css', get_template_directory_uri() . '/assets/css/slick-custom.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION );


	// theme css
	wp_enqueue_style( 'arica-theme-css', get_template_directory_uri() . '/assets/css/arcia-impact-theme-style.css', array(), _S_VERSION );
	wp_enqueue_style( 'arica-spacer-css', get_template_directory_uri() . '/assets/css/spacer.css', array(), _S_VERSION );
	wp_enqueue_style( 'arica-utliti-css', get_template_directory_uri() . '/assets/css/utilities.css', array(), _S_VERSION );

	// main css
	wp_enqueue_style( 'arcia-impact-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'arcia-impact-style', 'rtl', 'replace' );


	// js
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'arica-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'arcia_impact_scripts' );


// ACF Option Page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
	'page_title'   => 'Theme Options',
	'menu_title'   => 'Theme Options',
	'menu_slug'    => 'theme-general-settings',
	'capability'   => 'edit_posts',
	'redirect'     => false
  ));

  acf_add_options_sub_page(array(
	'page_title'   => 'Theme Header Settings',
	'menu_title'   => 'Site Header',
	'parent_slug'  => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
	'page_title'   => 'Theme Footer Settings',
	'menu_title'   => 'Site Footer',
	'parent_slug'  => 'theme-general-settings',
  ));
}



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function arcia_impact_widgets_init() {

	// footer widgets for link
	register_sidebar(
		array(
			'name'			=> esc_html__('Footer Link','arcia-impact'),
			'id'			=> 'footer-menu',
			'description'	=> esc_html__('Footer Link','arcia-impact'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);

	// footer widgets for 
	register_sidebar(
		array(
			'name'			=> esc_html__('Footer Contact','arcia-impact'),
			'id'			=> 'footer-contact',
			'description'	=> esc_html__('Footer Contact','arcia-impact'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);



}

add_action( 'widgets_init', 'arcia_impact_widgets_init');


/**
 * Disable the block widget editor and restore classic widgets
 */
function arcia_impactdisable_block_widgets() {
	remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'arcia_impactdisable_block_widgets' );