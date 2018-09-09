<?php
/*
 	* Template Name: Carrinho
 */
get_header( 'shop' );
?>
	
	<section>
		<div class="container">
			<?php

				echo do_shortcode('[woocommerce_cart]');

			?>
		</div>
	</section>
	
<?php get_footer(); ?>