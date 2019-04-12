<?php get_header(  ); ?>

	<div id="container">
		<?php /* If this is a category archive */ if (is_category()) { ?>
			Arquivo da Categoria "<?php echo single_cat_title(); ?>"
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			Arquivo de <?php the_time('j de F de Y'); ?>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			Arquivo de <?php the_time('F de Y'); ?>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			Arquivo de <?php the_time('Y'); ?>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			Arquivo do <?php the_author() ?>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			Arquivo do Blog
		<?php } ?>
		<?php if(have_posts()):																	/*verifica se existem posts */
			
			while (have_posts()) : the_post(  );												/*enquanto houver post, cada post é aberto*/
				get_template_part( 'content', get_post_format(  ) );							/*adiciona um trecho php com o nome content-(formato do post) */
			endwhile ?>
		<?php else: ?>
		<div class="article">
			<p>Lamentamos mas não foram encontrados artigos.</p>
		</div>
		<?php endif ?>
	</div>
	<?php get_sidebar( );																		/*adiciona um trecho php do arquivo sidebar */
	?>
	<div class="buttons-pagination">
	<?php next_posts_link('Antigos'); ?><?php previous_posts_link('Recentes'); ?>
	</div>

<?php get_footer(  ) ?>