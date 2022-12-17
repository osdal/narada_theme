<?php get_header(); ?>

<main class="page">
	<div class="main-content">
		<div class="logo">
			<picture>
				<source srcset="<?php echo get_template_directory_uri() ?> '/assets/img/Logo.webp'" type="image/webp"><img
					src="<?php echo get_template_directory_uri() ?> '/assets/img/Logo.webp'" alt="logo">
			</picture>
		</div>
		<div class="social-icons-block">
			<div class="social-icons-block__item">
				<a href="#" class="_icon-instagram-1"></a>
			</div>
			<div class="social-icons-block__item">
				<a href="#" class="_icon-whatsapp-1"></a>
			</div>
			<div class="social-icons-block__item">
				<a href="#" class="_icon-telegram-1"></a>
			</div>
		</div>

	 <?php wp_nav_menu(
			array(
				'theme_location' => 'frontpage_menu',
				'container' => false,
				'menu_class' => "main-menu",
				'walker' => new Narada_Menu_Frontpage(),
			)
    ); ?> 
	</div>
</main>
<?php get_footer(); ?>