<?php
/**
 * harbour functions and definitions
 *
 * @package harbour
 */

/**
* -----------------------------------------------------------------------------
* Summary            
* -----------------------------------------------------------------------------
*/

// 1.0 - Set up the content width value based on the theme's designs
// 2.0 - Set up theme default and register various supported features
// 3.0 - Load the custom scripts for the theme.



/**
* -----------------------------------------------------------------------------
* 1.0 - Set up the content width value based on the theme's designs            
* -----------------------------------------------------------------------------
*/
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}


/**
* -----------------------------------------------------------------------------
* 2.0 - Set up theme default and register various supported features           
* -----------------------------------------------------------------------------
*/

if ( ! function_exists( 'harbour_setup' ) ) :
	function harbour_setup() {

		//Make theme available for translation.
		load_theme_textdomain( 'harbour', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		//add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'harbour' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

		// Enable support for Post Formats.
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'harbour_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
}
endif; // harbour_setup
add_action( 'after_setup_theme', 'harbour_setup' );



/**
 * ----------------------------------------------------------------------------
 * 3.0 - Load the custom scripts for the theme.
 * ----------------------------------------------------------------------------
 */

if ( ! function_exists( 'harbour_scripts' ) ) {
	function harbour_scripts() {
		
		wp_enqueue_script('jquery');
		
		// Adds support for pages with threaded comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Load the stylesheets
		wp_enqueue_style( 'harbour-style', get_stylesheet_uri() );
	}
}
add_action( 'wp_enqueue_scripts', 'harbour_scripts' );