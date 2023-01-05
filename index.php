<?php get_header(); ?>

<main class="page_my">
	<div class="main-content">
		<div class="logo">
			<picture>
				<source srcset="<?php echo get_template_directory_uri() ?>'/assets/img/Logo.webp'" type="image/webp">
				<img src="<?php echo get_template_directory_uri() ?>'/assets/img/Logo.webp'" alt="logo">
			</picture>
		</div>
		<ul class="social-icons-block">
			<li class="social-icons-block__item _icon-instagram-1>
				<a href="#" class=""></a>
			</li>
			<li class="social-icons-block__item _icon-whatsapp-1">
				<a href="#" class=""></a>
			</li>
			<li class="social-icons-block__item _icon-telegram-1">
				<a href="#" class=""></a>
			</li>
		</ul>

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