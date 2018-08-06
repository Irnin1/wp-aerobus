	</div>
	<footer>
	<?php 
	wp_nav_menu(array(
		'theme_location' => 'Aerobus WP',
		'menu' 			 => 'Меню социальных ссылок',
		'container'		 => 'false',
		'menu_class'	 => 'nav-social-menu',
		'menu_id' 		 => 'social-menu'
	)); 
	?>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>