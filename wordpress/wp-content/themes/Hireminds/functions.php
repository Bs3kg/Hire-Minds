<?php


function theme_styles() {

	
		
		wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'google_maps', get_template_directory_uri() . 'https://maps.googleapis.com/maps/api/js?sensor=true', array('maps'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );


function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ), // homepage
			'page-menu'	=> __( 'Page Menu' ), // menu with page
		)
	);
}
add_action( 'init', 'register_theme_menus' );


// Gets rid of the <p> tags that WP adds when copying html over from text editor
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


?>