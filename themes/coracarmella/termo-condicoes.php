<?php
/*
 	* Template Name: Termos e condições
 */
get_header( 'shop' );
?>

	   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	   		<?php the_content(); ?>
       <?php endwhile;  ?>  
       <?php endif;  ?>  


<?php get_footer(); ?>