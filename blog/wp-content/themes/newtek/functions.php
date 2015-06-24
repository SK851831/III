<?php

if ( ! isset( $content_width ) ) $content_width = 600;

function newtek_wp_title( $title ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	$site_description = get_bloginfo( 'description' );

	$filtered_title = $title . get_bloginfo( 'name' );
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s', 'newtek' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}
add_filter( 'wp_title', 'newtek_wp_title' );

function newtek_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '',
		'after_widget' => '<br />',
		'before_title' => '<h5 class="sidebarhd">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Footer widget area',
		'id' => 'footer-sidebar',
		'description' => 'Appears in the footer area. 3 widgets recommended.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="sidebarhd2">',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'newtek_widgets_init' );

function newtek_font_url() {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by this font, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'newtek' ) ) {
		$font_url = add_query_arg( 'family', urlencode( 'Open Sans' ), "//fonts.googleapis.com/css" );
	}

	return $font_url;
}

function newtek_scripts() {

// Add font, used in the main stylesheet.
wp_enqueue_style( 'newtek-font', newtek_font_url(), array(), null );

wp_enqueue_style( 'newtek-style', get_stylesheet_uri() );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'newtek_scripts' );

// Register Theme Features
function newtek_setup()  {

// Add theme support for Semantic Markup
$markup = array( 'search-form', 'comment-form', 'comment-list', );
add_theme_support( 'html5', $markup );	

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'custom-background' );

$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 640, 360, true );
add_image_size( 'category-thumb',  640, 360, true );

register_nav_menu( 'header-menu',__( 'Header Menu', 'newtek' ) );

add_editor_style( array( 'editor-style.css', newtek_font_url() ) );

}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'newtek_setup' );

function newtek_custom_header_setup() {
	$args = array(

		// Set height and width, with a maximum value for the width.
		'height'                 => 50,
		'width'                  => 300,
		'max-width'              => 300,
                'header-text'            => false,

		// Support flexible height and width.
		'flex-height'            => false,
		'flex-width'             => false,

		// Random image rotation off by default.
		'random-default'         => false,

	        'uploads'                => true,
	        'wp-head-callback'       => '',
	        'admin-head-callback'    => '',
	        'admin-preview-callback' => '',
	);

	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'newtek_custom_header_setup' );

function newtek_excerpt_more($more) {
       global $post;
    return ' <a class="more-link" href="'. get_permalink($post->ID) . '">Read More...</a>';
}
add_filter('excerpt_more', 'newtek_excerpt_more');

function newtek_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'newtek_excerpt_length', 999 );

?>