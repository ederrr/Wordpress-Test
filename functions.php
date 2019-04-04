<?php 
function test_script(){
	
	wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css');

}

function theme_setup(){
	add_theme_support( 'menus' );

	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'secondary', 'Footer Navigation' );

}

add_action( 'wp_enqueue_scripts', 'test_script' );

add_action( 'after_setup_theme', 'theme_setup' );

?>