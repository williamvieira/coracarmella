<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cora-carmella
 */

get_header(); ?>

<div class="container">
	<div class="row">
	    <div class="col-md-12 list_content search-page content">

	    	<ul id="content_inside">




		<?php
		if ( have_posts() ) : ?>
			<div class="body-title-page">
				<h1 class="title-page"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Resultado da busca por: %s', 'cora-carmella' ), '<span class="search-term">' . get_search_query() . '</span>' );
				?></h1>
			</div><!-- .page-header -->
		<?php endif; ?>


<?php 
	        $paged = get_query_var('paged', 1);
	        $porPagina = get_option('posts_per_page');
	        $offset = $porPagina;
	        
	        $page_offset = ( $offset + ( ($paged - 1) * $porPagina ) );

	        if($paged == 1)
	        {
	            $args = array(
	                'order'          => 'DESC',
	                'posts_per_page' => $porPagina,
	                'offset'         => 0,
	                'post__not_in'   => $excetoId
	            );
	            
	            query_posts( $args );
	        }
	        

	        while (have_posts()) : the_post(); ?>
	                
	                <li class="post-item list_box content-area-post">
	                

	                    <div <?php post_class('' . $category ); ?>>
	                
	                    	<div class="area-post-title">
								<a href="<?php the_permalink(); ?>" class="thumb-search">
	                				<?php the_post_thumbnail( $post->ID, 'blog-home-thumb', array( 'class' => '' ) ); ?>
	                    			<span class="cat-txt"><?php $category = get_the_category(); echo $category[0]->cat_name;?></span>
	                    		</a> 
	                			<h2 class="list-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	                           <span class="list-post-date"><?php the_date('d • m • Y'); ?></span>
	                           <span class="list-post-autor">por <strong><?php the_author(); ?></strong></span>
	                		</div>
	                		
	                         <p class="list-post-txt"><?php the_content()?> </p>
	                        <hr class="list-post-hr">
	                    </div>    
	                </li>
	            <?php endwhile; ?>






 				<div class="clear"></div>
	        </ul>
	        
	        <div class="clear"></div>

	        
	                
	        <!-- Load More -->
	        <buttom class="load_more_cont" id="btnload">
	            <div class="load_more_text" id="btn-loadmore"><?php next_posts_link('VEJA + Matérias') ?></div>
	        </buttom><!--//load_more_cont-->                
	                         
	    </div>
    </div>

</div><!-- container -->

<?php
get_footer();
