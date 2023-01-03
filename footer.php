
<footer class="footer">
			<div class="footer__container brown">
			<?php wp_nav_menu(
							array(
								'theme_location' => 'footer_menu',
								'container' => 'nav',
								'container_class' => "footer__menu",
							)
					); ?> 
			</div>
</footer>
	

<?php wp_footer(); ?>

</body>

</html>