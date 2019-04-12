<form role="search" action="<?php echo home_url( '/' ); ?>" method="get">
	<input type="search" placeholder="Buscar" value="<?php echo get_search_query() ?>" name="s"/>			<!-- name é importante para WP reconhecer o input -->
</form>