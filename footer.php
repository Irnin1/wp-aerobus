	</div>
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-7">
					<p class="footerAerobus"><a href="<?php bloginfo('url'); ?>"> © Аэробус - центр праздничных технологий.</a></p>
				</div>
				<div class="col-sm-5">
					<div class="socialLan">
						<?php 
						wp_nav_menu(array(
							'theme_location' => 'Aerobus WP',
							'menu' 			 => 'Меню социальных ссылок',
							'container'		 => 'false',
							'menu_class'	 => 'nav-social-menu',
							'menu_id' 		 => 'social-menu'
						)); 
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="bottomPolosa"></div>
				</div>
			</div>
		</div>
	
	</footer>
	<?php wp_footer(); ?>
</body>
</html>