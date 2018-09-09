<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cora-carmella
 */

get_header(); ?>




<div class="container">
	<div class="row">
	    <div class="col-md-12 list_content content">
	  
	    
	    	<div class="body-title-page">
				<h1 class="title-page"><?php single_cat_title(); ?></h1>
			</div>


			<div class="row padding-bottom">
			<div class="col-md-4 col-sm-4 blog-bannercategory">
				<a href="<?php echo get_site_url(); ?>/category/imprensa/" class="bannercat01">
					<div class="caption-center">
						<img src="<?php bloginfo('template_directory');?>/assets/images/img-05.png" alt="" class="img-responsive">
					</div>
					<p>Imprensa</p>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 blog-bannercategory">
				<a href="<?php echo get_site_url(); ?>/category/eventos/" class="bannercat02">
					<div class="caption-center">
						<img src="<?php bloginfo('template_directory');?>/assets/images/img-06.png" alt="" class="img-responsive">
					</div>
					<p>Eventos</p>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 blog-bannercategory">
				<a href="<?php echo get_site_url(); ?>/category/novidades/" class="bannercat03">
					<div class="caption-center">
						<img src="<?php bloginfo('template_directory');?>/assets/images/img-07.png" alt="" class="img-responsive">
					</div>
					<p>Novidades</p>
				</a>
			</div>
		</div>



	    <ul id="content_inside">
	        <?php 
	        
	        while (have_posts()) : the_post(); ?>
	                
	                <li class="post-item list_box content-area-post">
	                
	                    <div <?php post_class('' . $category ); ?>>
	                
	                    	<div class="area-post-title">
	                    		<a href="<?php the_permalink(); ?>"><span class="cat-txt"><?php $category = get_the_category(); echo $category[0]->cat_name;?></span></a> 
	                			<h2 class="list-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	                           <span class="list-post-date"><?php the_date('d • m • Y'); ?></span>
	                           <span class="list-post-autor">por <strong><?php the_author(); ?></strong></span>
	                		</div>
	                		
	                         <p class="list-post-txt"><?php the_content()?> </p>
	                        <hr class="list-post-hr">
	                        <div class="clear"></div>
	                    </div>    
	                </li>
	            <?php endwhile; ?>
	              
	            <div class="clear"></div>
	        </ul>
	        <div class="clear"></div>
	    </div>
    </div>

</div><!-- container -->






<?php
get_footer();
