

<!-- Declares footer with footer content coming from wordpress-->
<footer>
		<div class="container">
		<?php //Creates the menu in the footer area
			wp_nav_menu([
				'theme_location' => 'footer-menu',

				'menu_class' => 'footer-bar',
		]); ?>
		</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
