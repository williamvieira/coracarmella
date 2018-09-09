<?php
/*
 	* Template Name: Minha Conta
 */
get_header( 'shop' );
?>
	
	

	<section>
		<div class="container">
			<?php

				echo do_shortcode('[woocommerce_my_account]');

			?>
		</div>
	</section>
	


<?php get_footer(); ?>​