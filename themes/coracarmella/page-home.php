<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<section class="section-home">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-sm-12 img-full">
				<?php echo do_shortcode('[metaslider id="315"]'); ?>
			</div>
		</div>



		<div class="row padding-bottom futured-buttons">
			<div class="col-md-4 col-sm-4 img-full">
				<a href="<?php echo get_site_url(); ?>/blog/" class="shortbanner shortbanner-blog">
					<div class="caption-center">
						<img src="<?php bloginfo('template_directory');?>/assets/images/img-02.png" alt="" class="img-responsive">
					</div>
					<p>Novidades</p>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 img-full">
				<a href="#produtos" class="shortbanner shortbanner-produtos" data-toggle="modal" data-target="#modalprodutos">
					<div class="caption-center">
						<img src="<?php bloginfo('template_directory');?>/assets/images/img-03.png" alt="" class="img-responsive">
					</div>
					<p>Produtos</p>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 img-full">
				<a href="<?php echo get_site_url(); ?>/contato/" class="shortbanner shortbanner-contato">
					<div class="caption-center">
						<img src="<?php bloginfo('template_directory');?>/assets/images/img-04.png" alt="" class="img-responsive">
					</div>
					<p>Contato</p>
				</a>
			</div>
		</div>


		<div class="row desktop">
			<div class="col-md-8 col-sm-8 video-home">
				<video width="100%" height="auto" autoplay="" loop="" muted="">
			            <source src="<?php bloginfo('template_directory');?>/assets/images/intro.mp4" type="video/mp4">
			            <!-- <source src="movie.ogg" type="video/ogg"> -->
			            Your browser does not support the video tag.
			    </video>
			</div>
			<div class="col-md-4 col-sm-4 img-full">
				<div class="homebanner-tercrow">
					<img src="<?php bloginfo('template_directory');?>/assets/images/image06.png" alt="" class="img-responsive img">
				</div>
			</div>
		</div>



		<!-- Blog Ultimos Posts -->
			<div class="row">
					<h2 class="titulo-span"><span>Blog</span></h2>
				



					<?php if (wp_is_mobile()) { ?>
						<div id="Carousel" class="carousel slide mobile">
							<!-- Carousel items -->
							<div class="carousel-inner area-slider-home-blog">
								<?php
					                $i = 1; 

					                global $post; 
					                $args = array( 
					                  'numberposts'   => -1, 
					                  'post_type'     => 'post', 
					                  'order'         => 'DESC', 
					                  'category_name' => 'Blog'
					                );

					                $myposts = get_posts($args);

					                if($myposts):

					                  $chunks = array_chunk($myposts, $i);
					                  $html = "";

					                  foreach($chunks as $chunk):
					                    ($chunk === reset($chunks)) ? $active = "active" : $active = "";
					                    $html .= '<div class="item '. $active .'"><div class="row">';

					                    foreach($chunk as $post):
					                      $html .= '<div class="col-md-3 col-sm-3">';
					                      $html .= '<a class="slider-home-blog" href="';
					                      $html .= get_permalink( $post->ID );
					                      $html .= '">';
					                      $html .= get_the_post_thumbnail( $post->ID, 'blog-home-thumb', array( 'class' => '' ) );
					                      $html .= '<div class="carousel-caption">';
					                      $categories = get_the_category();
					                      $html .= '<p><span>' . esc_html( $categories[0]->name ) . ' | ' . get_post_time('d', true) . '</span>/' . get_post_time('M', true) . '</p>';
					                      $html .= '<h3>' . get_the_title($post->ID) . '</h3>';
					                      $html .= '</div>';
					                      $html .= '</a>';
					                      $html .= '</div>';
					                    endforeach;

					                    $html .= '</div></div>';  

					                  endforeach;
					                  echo $html;

					                endif; 
					            ?>

					            <?php  ?>
							</div><!--.Carousel-->
							
							<a data-slide="prev" href="#Carousel" class="left carousel-control"><img src="<?php bloginfo('template_directory');?>/assets/images/back.png ?>" alt=""></a>
							<a data-slide="next" href="#Carousel" class="right carousel-control"><img src="<?php bloginfo('template_directory');?>/assets/images/next.png ?>" alt=""></a>
						</div>

					<?php } else{ ?>

							<div id="Carousel" class="carousel slide desktop">
							<!-- Carousel items -->
							<div class="carousel-inner area-slider-home-blog">
								<?php
					                $i = 4; 

					                global $post; 
					                $args = array( 
					                  'numberposts'   => -1, 
					                  'post_type'     => 'post', 
					                  'order'         => 'DESC', 
					                  'category_name' => 'Blog'
					                );

					                $myposts = get_posts($args);

					                if($myposts):

					                  $chunks = array_chunk($myposts, $i);
					                  $html = "";

					                  foreach($chunks as $chunk):
					                    ($chunk === reset($chunks)) ? $active = "active" : $active = "";
					                    $html .= '<div class="container-fluid item '. $active .'"><div class="row">';

					                    foreach($chunk as $post):
					                      $html .= '<div class="col-md-3 col-sm-3">';
					                      $html .= '<a class="slider-home-blog" href="';
					                      $html .= get_permalink( $post->ID );
					                      $html .= '">';
					                      $html .= get_the_post_thumbnail( $post->ID, 'blog-home-thumb', array( 'class' => '' ) );
					                      $html .= '<div class="carousel-caption">';
					                      $categories = get_the_category();
					                      $html .= '<p><span>' . esc_html( $categories[0]->name ) . ' | ' . get_post_time('d', true) . '</span>/' . get_post_time('M', true) . '</p>';
					                      $html .= '<h3>' . get_the_title($post->ID) . '</h3>';
					                      $html .= '</div>';
					                      $html .= '</a>';
					                      $html .= '</div>';
					                    endforeach;

					                    $html .= '</div></div>';  

					                  endforeach;
					                  echo $html;

					                endif; 
					            ?>
							</div><!--.Carousel-->
							<a data-slide="prev" href="#Carousel" class="left carousel-control"><img src="<?php bloginfo('template_directory');?>/assets/images/back.png ?>" alt=""></a>
							<a data-slide="next" href="#Carousel" class="right carousel-control"><img src="<?php bloginfo('template_directory');?>/assets/images/next.png ?>" alt=""></a>
						</div>

					<?php } ?>

		</div>
	</div>
</section>


<!-- Modal -->
<div class="modal fade" id="modalprodutos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
        <a href="<?php echo get_site_url(); ?>/categoria-produto/infantil" class="modalprodutos-link">
			Infantil
		</a>
		<a href="<?php echo get_site_url(); ?>/categoria-produto/pet" class="modalprodutos-link">
			Pet
		</a>
      
   
    </div>
  </div>
</div>


<?php get_footer(); ?>