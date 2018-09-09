<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cora-carmella
 */

?>

<div class="container-fluid">
	<div class="row">
		<h2 class="titulo-span <?php if(is_woocommerce()) { echo "titulo-span-white"; } ?>"><span>Social</span></h2>
	</div>
</div>


<div class="sociais">
	<div class="col-md-12 col-sm-12">
		<ul>
			<li><a href="https://www.linkedin.com/in/maith%C3%AA-diniz-ab3894158/" target="_blank"><div class="linkedin"></div></a></li>
			<li><a href="https://www.youtube.com/channel/UCyLj1zaTEeSIvFw8GZYqi-A" target="_blank"><div class="youtube"></div></a></li>
			<li><a href="https://www.facebook.com/coracarmella/" target="_blank"><div class="facebook"></div></a></li>
			<li><a href="https://br.pinterest.com/coracarmella/" target="_blank"><div class="pinterest"></div></a></li>
			<li><a href="https://www.instagram.com/coracarmella/" target="_blank"><div class="instagram"></div></a></li>
		</ul>
	</div>
</div>

<footer class="footer">
	<div class="container-fluid">
		<div class="row menu-mapa">
			<div class="col-md-5 col-sm-5 menu-mapa-left">
				<ul class="desktop">
					<li><a href="<?php echo get_site_url(); ?>">Home</a><span class="separate">|</span></li>
					<li><a href="<?php echo get_site_url(); ?>/produtos">Produtos</a><span class="separate">|</span></li>
					<li><a href="<?php echo get_site_url(); ?>/marca">Marca</a><span class="separate">|</span></li>
					<li><a href="<?php echo get_site_url(); ?>/blog">Blog</a><span class="separate">|</span></li>
					<li><a href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
				</ul>
			</div> 
			<div class="col-md-2 col-sm-2 no-padding menu-mapa-news">
				<ul>
					<li class="form-input">
						<form action="https://coracarmella.us12.list-manage.com/subscribe/post?u=d29dce825a3fa07238a739e68&amp;id=a1df9c8b85" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form" target="_blank" novalidate>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<input type="email" value="" name="EMAIL" class="required input" id="mce-EMAIL" placeholder="Newsletter"> 
							<button type="submit"  id="mc-embedded-subscribe" class="email button"></button>
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d29dce825a3fa07238a739e68_a1df9c8b85" tabindex="-1" value=""></div>
						</form>
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					</li>
				</ul>
			</div> 
			<div class="col-md-5 col-sm-5 menu-mapa-right">
				<ul class="menu-termos">
					<li><a href="<?php echo get_site_url(); ?>/politica-de-privacidade/	">Política de Privacidade</a><span class="separate">|</span></li>
					<li><a href="<?php echo get_site_url(); ?>/termos-e-condicoes/">Termos de Uso</a><span class="separate">|</span></li>
					<li><a href="<?php echo get_site_url(); ?>/trocas-e-devolucoes/">Trocas e Devoluções</a><span class="separate"></li>
				</ul>
			</div> 
		</div>
	</div>
	<div class="row no-row-margin copywriter">
		<div class="col-md-12 col-sm-12">
			<p>© Copyright 2018 | Direitos Reservados | Desenvolvido por <a href="http://www.criaturo.com" class="criaturo"><img src="http://www.criaturo.com/action/agencia-criaturo-design-logo5.svg" alt="Criaturo Design" alt="Agência Criaturo Design" style="width: 70px; opacity: 0.4;"></a></p>
		</div>
	</div>
</footer>







<!-- Criaturo - Loadmore -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $('.load_more_cont a').live('click', function(e) {
	    e.preventDefault();
	    $('.load_more_text a').html('CARREGANDO + POSTS');
	    
	    $.ajax({
		    type: "GET",
		    url: $(this).attr('href') + '#content',

		    dataType: "html",
		    success: function(out) {
			    result = $(out).find('#content_inside .list_box');
			    nextlink = $(out).find('.load_more_cont a').attr('href');
			    
			$('#content_inside').append(result);
			    $('.load_more_text a').html('VEJA MAIS');
			    

			    if (nextlink != undefined) {
				    $('.load_more_cont a').attr('href', nextlink);
			    } else {
				    $('.load_more_cont').remove();
				    $('#content_inside').append('<div class="clear"></div>');
			    }
   				
		    }

	    });
    });
</script> 




<?php wp_enqueue_script( 'jquery' ); ?>
<script type="text/javascript">
jQuery(document).ready(function($)
{
    $("#menu ul li").each(function() {
 
        var el = $('#' + $(this).attr('id') + ' ul:eq(0)'); 
 
        $(this).hover(function() {
            var n_left = $(this).position().left;
            var n_top = $(this).position().top + 50;
            var n_width = $(this).width() + 40;
 
            el.css('left');
            el.css('top', n_top);
            el.css('width', n_width);
            el.show();
        }, function(){
            el.hide();
        });
    });
});
</script>

<?php wp_footer(); ?>

</body>
</html>
