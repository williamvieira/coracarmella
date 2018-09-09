<?php
/*
 	* Template Name: Rastreamento
 */
get_header( 'shop' );
?>


<?php wp_footer(); ?>
	


	
	<section>
		<div class="container">
			<?php

				echo do_shortcode('[woocommerce_order_tracking]');

			?>
		</div>
	</section>

	

<?php get_footer(); ?>