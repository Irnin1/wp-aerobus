<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<div class="container">
		<div class="row">
			<div class="col col-sm-4">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="175" height="175" alt="" ></a>
				</div>
			</div>
			<div class="col col-sm-4">
				<div class="sity timeWork">
				Город, время работы
				</div>
			</div>
			<div class="col col-sm-4">
				<div class="contactInform">
				Контактная информация
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="nav_menu">	
					<?php wp_nav_menu(array(
						'theme_location' => 'Aerobus WP',
						'menu' 			 => 'Главное меню',
						'container'		 => 'false',
						'menu_class'	 => 'nav-main-menu',
						'menu_id' 		 => 'main-menu'
					)); 
					?>
				</div>
				
				<?php get_search_form(); ?>	
				<span class="search-toggle"><i class="fa fa-search"></i></span>
				<nav class="mobile-nav"></nav>
			</div>
		</div>
	</div>

</header>
	<div class="wrapper">
