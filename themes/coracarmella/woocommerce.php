<?php
/**
 * The template for displaying all pages.
 */
get_header(); 

?>


	<div id="pages-container" class="content-area pages-content">
		<main id="main" class="site-main" role="main">
			<?php if(is_shop() || is_product_category()) : ?>
			
				<div class="page-banner produtos-header">
						<h1><?php woocommerce_page_title() ?></h1>
				</div>

			<?php endif; ?>

			<?php if(is_product()) : ?>
				<div class="page-banner page-banner-cover"></div>
			<?php endif; ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<div class="<?php if(is_product()) { echo "container-fluid"; } else { echo "container"; }?>">
						<div class="row">
							<?php if(is_shop() || is_product_category()) : ?>
								<div class="col-md-2 col-sm-2 no-padding woo-aside">
									

									 <div class="body-title-category"><h2 class="title-category">Categorias</h2><div class="title-logo"></div></div>
									 


									 <?php 
										if ( is_active_sidebar('sidebar-produtos') ) {
										    dynamic_sidebar('sidebar-produtos');
										}
									  ?>

								</div>
							<?php endif; ?>
							<div class="<?php if(is_product()) { echo "col-md-12 col-sm-12"; } else { echo "col-md-10 col-sm-10"; }?> no-padding-right woo-content">
								<?php woocommerce_content(); ?>
							</div>
						</div>
					</div>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #pages-container -->
<?php

get_footer();