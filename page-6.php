<?php get_header(); ?>

	<?php if(have_posts()):
		
		while (have_posts()) : the_post(  );?>
			<h2>Pagina linkada por Id</h2>
			<small>Posted on: <?php the_time('F, Y') ?> on <?php the_category() ?></small>
			<p><?php the_content( ); ?></p>
	<?php endwhile;
	endif;
	?>

<?php get_footer(); ?>
