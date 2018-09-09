<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
	


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name="robot" content="index,follow">
	<meta name="rating" content="general">

    <?php
        $key = 'descricao';
        $descricao = get_post_meta($post->ID, $key, TRUE);
        if($descricao != '') {?>
        	<meta name="description" content="<?php echo $descricao ?>">
        <?php } else{?>
    		<meta name="description" content="Conceito de moda infantil e pet que veste a criança e seu bichinho de estimação com o mesmo tecido e desenho. No mundo lúdico da Cora Carmella você encontra roupas confortáveis que incentivam à brincar.">
    <?php } ?>


	<meta name="theme-color" content="#ec8eae" />
	
	<!-- favicon -->
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-16x16.png">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

	<!-- style -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/responsivo.css">
	
	<!-- Menu -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/menu/style.css">

	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/8df0f545f4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117781239-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-117781239-1');
	</script>


	<?php wp_head(); ?>
</head>
<body class="<?php if(is_woocommerce()) { echo "body-shop"; } ?>" <?php body_class(isset($class) ? $class : ''); ?>> 
	<header class="header desktop">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-5 col-sm-4">
						<div id="menu">
						    <?php wp_nav_menu( array( 'location'=>'main-menu', 'container'=>'div', 'container-class'=>'menu', 'menu_class'=>'ul-menu' ) ); ?>
						</div>
				</div>

				<div class="col-md-2 col-sm-2 no-padding">
					<a href="<?php echo esc_url(home_url('/'));?>"><img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="" class="img-responsive logo"></a>
				</div>
			
				<div class="col-md-5 col-sm-5">
					<ul class="body-cart">
						<li class="header-area-bag">
							<a href="<?php echo esc_url(home_url('/carrinho'));?>" class="header-bag">
								<img src="<?php bloginfo('template_directory');?>/assets/images/cart.png" alt="">
								<span class="count-cart">
									<?php 
										global $woocommerce;
										$count = $woocommerce->cart->cart_contents_count;
										if ($count == 0){
											echo '0';
										}
										if ($count == 1){
											echo '1';
										}
										if ($count > 1) {
											echo $count;
										}		
									?>
								</span>
							</a></li>
						<li class="header-area-login"><a href="<?php echo esc_url(home_url('/entrar'));?>"><img src="<?php bloginfo('template_directory');?>/assets/images/login.png" alt=""> Entrar</a></li>
						<li class="header-area-search">
							<form role="search" method="get" class="form" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input type="text"  class="input" value="" placeholder="Buscar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buscar'" name="s" id="s" /> 
								<button class="search"></button>
							</form></li>
						
						
					</ul>
				</div>
			</div>
		</div>
	</header>


	<div class="mobile header-mobile">
		<a href="<?php echo esc_url(home_url('/'));?>"><img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="" class="img-responsive logo"></a>

		<div id="o-wrapper" class="menu-collapse o-wrapper menu-mobile col-md-1 no-padding">
			<div class="menu-mobile btn-menu o-content">

				<a id="c-button--slide-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-mobile.png">
				</a>
			</div>
		</div>

		<a href="<?php echo esc_url(home_url('/carrinho'));?>" class="header-bag header-mobilebag">
			<img src="<?php bloginfo('template_directory');?>/assets/images/cart.png" alt="">
			<span class="count-cart">
				<?php 
					global $woocommerce;
					$count = $woocommerce->cart->cart_contents_count;
					if ($count == 0){
						echo '0';
					}
					if ($count == 1){
						echo '1';
					}
					if ($count > 1) {
						echo $count;
					}		
				?>
			</span>
		</a>
	</div>





<div class="headermargin-mobile"></div>

<?php if(is_page() && !is_page_template("page-home.php")){ ?>
	<div class="page-banner page-banner-cover desktop">
		<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
	</div>
<?php } ?>




<?php if (wp_is_mobile() && is_page()) { ?>
	<!-- search mobile -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form role="search" method="get" class="form" id="searchform" action="<?php echo home_url( '/' ); ?>">
					<input type="text"  class="input" value="" placeholder="Buscar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buscar'" name="s" id="s" /> 
					<button class="search"></button>
				</form>
			</div>
		</div>
	</div>
<?php } ?>


  <!-- Menu Mobile www.criaturo.com -->
<nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
  <ul class="c-menu__items">
		<?php wp_nav_menu( array( 'location'=>'main-menu', 'container'=>'div', 'container-class'=>'menu', 'menu_class'=>'ul-menu' ) ); ?>
  </ul>
  <button class="c-menu__close">&rarr;</button>
</nav>


<div id="c-mask" class="c-mask"></div><!-- /c-mask www.criaturo.com -->

<!-- menus script www.criaturo.com -->
<script src="<?php echo get_template_directory_uri();?>/assets/menu/menu.js"></script>

<!-- scripts www.criaturo.com -->
<script src="<?php echo get_template_directory_uri();?>/assets/menu/scripts.js"></script>
