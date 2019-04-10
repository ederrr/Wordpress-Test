<div class="article">
	<div class="container">
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<small>Postado por <a href="<?php echo get_author_posts_url( get_the_author_ID(  ) ); ?>" ><?php the_author() ?></a> em <?php the_time('d/m/Y') ?></small>
		<p><?php the_content(); ?></p>
	</div>
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>
</div>