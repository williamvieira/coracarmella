<?php
/**
 * Template Name: Marca
 */
?>

<?php get_header(); ?>

<section class="section-marca">

	<div class="container-fluid">
		<div class="row">
			<div class="body-title-page">
				<h1 class="title-page"><?php the_title() ?><div class="title-icon-pink"></div></h1>
			</div>
		</div>
		<div class="row padding-bottom">
			<div class="col-md-4 col-sm-4 img-full">
				<img src="<?php bloginfo('template_directory');?>/assets/images/image11.png" alt="" class="img-responsive marca-banners">
				<div class="caption-center">
					<img src="<?php bloginfo('template_directory');?>/assets/images/img-07.png" alt="" class="img-responsive">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 img-full">
				<img src="<?php bloginfo('template_directory');?>/assets/images/image12.png" alt="" class="img-responsive marca-banners">
				<div class="caption-center">
					<img src="<?php bloginfo('template_directory');?>/assets/images/img-06.png" alt="" class="img-responsive">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 img-full">
				<img src="<?php bloginfo('template_directory');?>/assets/images/image13.png" alt="" class="img-responsive marca-banners">
				<div class="caption-center">
					<img src="<?php bloginfo('template_directory');?>/assets/images/img-05.png" alt="" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
</section>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="content-area-post">

							<div class="content-area-page">
								<div class="area-post-title">
									<h1 class="list-post-title"><?php the_title(); ?></h1>
								</div>

								<p class="list-post-txt"><?php the_content()?> </p>
								<hr class="list-post-hr">
							</div>
						</div>
					</div>
				</div>
			</div>



			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>