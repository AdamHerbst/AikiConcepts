<!-- creates footer from wordpress information -->
<footer>

	<div class="container">
		<?php 
		wp_nav_menu(
				array(
					// Enables menu's in footer 
					'theme_location' => 'footer-menu',
					'menu_class' => 'footer-bar'
				)
		);
		?>
	</div>
</footer>
<!-- Retrieves footer and closes body and html tags -->
<?php wp_footer();?>
</body>
</html>