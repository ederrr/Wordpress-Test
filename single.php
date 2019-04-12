<?php get_header(); ?>

	<div id="container">
		<?php if(have_posts()):																	/*verifica se existem posts */
			
			while (have_posts()) : the_post(  );												/*enquanto houver post, cada post é aberto*/
				get_template_part( 'content', get_post_format(  ) );							/*adiciona um trecho php com o nome content-(formato do post) */
				comments_template(); ?>
				<div class="buttons-pagination">
					<?php next_post_link(); previous_post_link(); ?>							<!-- apresenta os botoes de paginacao para posts adjacentes -->
				</div>
			<?php endwhile ?>
		<?php else: ?>
		<div class="article">
			<p>Lamentamos mas não foram encontrados artigos.</p>
		</div>
		<?php endif ?>
<?php get_footer(); ?>