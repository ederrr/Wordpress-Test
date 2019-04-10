<?php get_header(); ?>
	<div id="container">
		<?php

		$args = array(
			'type' => 'post',
			'posts_per_page' => 2,
			'offset' => 2, 																		/* em qual post iniciar, -1 para infinito */
			/* 'cat' => 3,																		categoria usando ID da categoria */
			/* 'category_name' => 'news',														categoria usando nome da categoria */
			/* 'category__in' => array(1,2,8), 													IDs das categorias que devem aparecer*/
			/* 'category__not_in' => array(1,2,8), 												IDs das categorias que nao devem aparecer*/
		);

		$lastBlog = new WP_Query($args);														/* instancia uma copia do loop de posts */

		if($lastBlog->have_posts()):
			
			while ($lastBlog->have_posts()) : $lastBlog->the_post(  );
				get_template_part( 'content', get_post_format(  ) );
			endwhile; else: ?>
		<div class="article">
			<p>Lamentamos mas não foram encontrados artigos.</p>
		</div>
		<?php endif;
			wp_reset_postdata(  );																/* Previne a alteração em outros loops */
		?>
	</div>
	<?php get_sidebar( ) ?>

<?php get_footer(); ?>