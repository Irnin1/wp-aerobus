<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	<script>jQuery(document).ready(function($){
                var owl = $(".owl-carousel");
				owl.owlCarousel({
						items:1,
						margin:0,
						nav:true,
						dots:true,
						loop:true,

						//Autoplay
    					autoPlay: true,
						autoplay:true, //Автозапуск слайдера
                		smartSpeed:1000, //Время движения слайда
						autoplayTimeout:7000, //Время смены слайда

						// Navigation
						nav:true,
    					navText: ["<img src='<?php bloginfo('template_url'); ?>/images/slider/prev.png'>", "<img src='<?php bloginfo('template_url'); ?>/images/slider/next.png'>"]
                    });
                });
        </script>
</head>
<body <?php body_class(); ?> >

<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-sm-4">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="190" height="190" alt="" ></a>
				</div>
			</div>
			<div class="col col-sm-4">
				<div class="sity timeWork">
					<div class="again-sity">
						<h1>Мы в городах:</h1>
					</div>
					<div class="time-work-in-box">
					Время работы: с 8 00 до 21 00 (мск) <br />
					Выходные дни: суббота, воскресение.
					</div>
				</div>
			</div>
			<div class="col col-sm-4">
				<div class="contactInform">
					<div class="mainOffice">Главный офис находится <br />
					   по адресу: г.Челябинск, ул.Профинтерна, 46</div>
					<div class="telInform">
						<p>Звоните, ответим на любые <br />
						   ваши вопросы:</p>
						<p class="tel">+7 (917) 342-33-68</p>
					
						<a href="#" class="button-blue">Обратный звонок</a>
					</div>
					
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="header-polosa">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="otbivka"><h1>Аэробус - яркие идеи, яркие воплощения.</h1></div>
			</div>
			<div class="col-sm-4">
				<div class="searchForm">
					<?php get_search_form(); ?>	
					<span class="search-toggle"><i class="fa fa-search"></i></span>
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
				<nav class="mobile-nav"></nav>
			</div>
		</div>
		
	</div>

</header>
	<div class="wrapper">
