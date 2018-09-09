<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' );

?>


<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

	<div class="container">
		<?php woocommerce_breadcrumb(); ?>
		<div class="row">
			<div class="col-md-7 col-sm-7 img-single"><?php do_action( 'woocommerce_before_single_product_summary' ); ?></div>
			<div class="col-md-5 col-sm-5 body-detail"><?php do_action( 'woocommerce_single_product_summary' ); ?> </div>
		</div>
	</div>
	
	<h2 class="titulo-span <?php if(is_woocommerce()) { echo "titulo-span-white"; } ?>"><span>Outro produtos</span></h2>
	

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
			</div>
		</div>
					
		<div class="row related">
			<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
				<?php
					$params = apply_filters( 'woocommerce_related_products_args', array(
												    'post_type'            => 'product',
												    'posts_per_page'       =>  3,
												    'post__in'             => $related,
												    'post__not_in'         => array( $product->id ),
												    'orderby' => 'rand' 
												) );
					$wc_query = new WP_Query($params);
				?>

			    <?php if ($wc_query->have_posts()) : ?>
			    	<?php while ($wc_query->have_posts()) :
			        	$wc_query->the_post(); ?>
			    		<div class="col-md-4 col-sm-4 col-xs-4">
			    			<div class="body-related">		
				    			<a href="<?php the_permalink(); ?>" class="content-border">
				          			<?php the_post_thumbnail('blog-home-thumb'); ?>
				           		</a>
				           		<p><?php the_title() ?></p>
			    			</div>
			    		</div>
			     <?php endwhile; ?>
			     <?php wp_reset_postdata(); ?>
			     <?php else:  ?>
			     <li>
			          <?php _e( 'No Products' ); ?>
			     </li>
			     <?php endif; ?>
			</div>
		</div>
	</div>
</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
