<?php
/*
 	* Template Name: Checkout
 */
get_header( 'shop' );
?>
	<section>
		<div class="container">
			<?php

				echo do_shortcode('[woocommerce_checkout]');

			?>
		</div>
	</section>
	


<?php get_footer(); ?>