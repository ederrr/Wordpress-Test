<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> <?php bloginfo( 'name' ) ?> </title>
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
	<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
	