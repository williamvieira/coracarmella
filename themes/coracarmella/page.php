<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cora-carmella
 */

get_header(); ?>





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

<?php
get_footer();
