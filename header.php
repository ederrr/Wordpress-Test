<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php wp_head(); ?>
</head>

<?php 
	if( is_front_page(  ) ):
		$my_class = array( 'class' );
	else:
		$my_class = array( 'no-class' );
	endif;
?>

<body  <?php body_class($my_class); ?>>
	<h1><?php bloginfo( name ) ?></h1>
	<h2><?php bloginfo('description'); ?></h2>
	
	<?php wp_nav_menu(array('theme_location' => 'primary')); ?>

	<hr>
	