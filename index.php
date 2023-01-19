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
		

	 <div class="social-icons-block">
					<div class="icon-item">
						<a href="<?php echo get_option('number_of_slider_slides') ?>">
							<img src= <?php echo get_template_directory_uri() . '/assets/img/icons/Instagram.svg'?>>
						</a>
					</div>
					<div class="icon-item">
						<a href="https://google.com">
							<img src=<?php echo get_template_directory_uri() . '/assets/img/icons/Telegram.svg'?>>
						</a>
					</div>
					<div class="icon-item">
						<a href="https://google.com">
							<img src=<?php echo get_template_directory_uri() . '/assets/img/icons/Viber.svg'?>>
						</a>
					</div>
					<div class="icon-item">
						<a href="https://google.com">
							<img src=<?php echo get_template_directory_uri() . '/assets/img/icons/Whatsapp.svg'?>>
						</a>
					</div>
					<!-- <div class="icon-item">
						<a href="https://google.com">
							<object type="image/svg+xml" data="@img/icons/Messenger.svg"></object>
						</a>
					</div>
					<div class="icon-item">
						<a href="https://google.com">
							<svg style="fill: #569854;">
								<use xlink:href="@img/icons/icons.svg#svg-Telegram"></use>
							</svg>
						</a>
					</div>
					<div class="icon-item"></div> -->
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