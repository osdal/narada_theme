<?php get_header(); ?>

<main class="page_my">
	<div class="main-content">

			<?php
				$logo_img = '';
				if( $custom_logo_id = get_theme_mod('custom_logo') ){
					$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
						'class'    => 'custom-logo',
						'itemprop' => 'logo',
					) );
				}

				echo $logo_img;
			?>

		
		<!-- Вывод лого -->
		


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
				'theme_location' => 'contacts_menu',
				'container' => false,
				'menu_class' => "social-icons-block",
				// 'walker' => new Narada_Menu_Frontpage(),
			)
    ); ?>
	 
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