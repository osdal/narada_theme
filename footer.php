<footer class="footer">
			<div class="footer__container">
				<!-- <nav class="footer__menu"> -->
				<?php wp_nav_menu(
			array(
				'theme_location' => 'footer_menu',
				'container' => 'nav',
				'container_class' => "footer__menu",
			)
    ); ?> 
				<!-- </nav> -->
			</div>
		</footer>
	</div>

<?php wp_footer(); ?>
</body>

</html>