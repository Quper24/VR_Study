<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts');
function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), null, true);
			wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
?>