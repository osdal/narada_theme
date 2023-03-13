


<footer class="footer">
			<div class="footer__container">
				<div class="social_icons">
					<?php if(!empty(get_option( 'messengers_instagram'))){
								echo '<a target="_blanc" href="https://instagram.com/' . 
										get_option( 'messengers_instagram') . '"><img src=' . 
										get_template_directory_uri() . '/assets/img/icons/Instagram_WC.svg></a>';
							} 
							if(!empty(get_option( 'messengers_telegram'))){
								echo '<a target="_blanc" href="https://t.me/' . 
										get_option( 'messengers_telegram') . '"><img src=' . 
										get_template_directory_uri() . '/assets/img/icons/Telegram1.svg></a>';
							}
							if(!empty(get_option( 'messengers_whatsapp'))){
								echo '<a target="_blanc" href="https://wa.me/' .
								get_option( 'messengers_whatsapp') . '"><img src=' . 
								get_template_directory_uri() . '/assets/img/icons/Whatsapp.svg></a>';
							}
							if(!empty(get_option( 'messengers_viber'))){
								echo '<a target="_blanc" href="viber://chat?number=%2B' .
								get_option( 'messengers_viber') . '"><img src=' .
								get_template_directory_uri() . '/assets/img/icons/Viber.svg></a>';
							}
							if(!empty(get_option( 'messengers_youtube'))){
								echo '<a target="_blanc" href="https://youtube.com/@' .
								get_option( 'messengers_youtube') . '"><img src=' .
								get_template_directory_uri() . '/assets/img/icons/Youtube.svg></a>';
							}
							if(!empty(get_option( 'messengers_facebook'))){
								echo '<a target="_blanc" href="https://facebook.com/' .
								get_option( 'messengers_facebook') . '"><img src=' .
								get_template_directory_uri() . '/assets/img/icons/Facebook1.svg></a>';
							}
					?>
			</div>
</footer>
	

<?php wp_footer(); ?>

</body>

</html>