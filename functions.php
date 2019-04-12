<?php 

function test_script(){
	
	wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css');

}

function test_include_support(){

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background' );
	add_theme_support( 
		'post-formats',
		array(
			'aside',
			'image',
			'video'
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form'
		)
	);

}

function register_my_menus(){
	
	register_nav_menus ( 
		array(
		'primary'=> __('Primary Header Navigation'),
		'secondar'=> __('Footer Navigation'),
		)
	);
}

function register_my_post_types(){
	
	register_post_type ( 
		'habilidades',
		array(
			'labels'=> array(
				'name' => __('Habilidades'),
				'singular_name' => __('Habilidade'),
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon'	=> 'dashicons-admin-links',
			'supports' => array('title','editor','thumbnail','page-attributes'),
		)
	);
}

add_action( 'wp_enqueue_scripts', 'test_script' );
add_action( 'after_setup_theme', 'register_my_menus' ); 
add_action( 'after_setup_theme', 'test_include_support' );
add_action( 'init','register_my_post_types' );
?>