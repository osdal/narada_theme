<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="format-detection" content="telephone=no">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
					<div class="header__logo-name-block">
						<div class="header__logo">
							<?php echo get_custom_logo(); ?>
						</div>
						<div class="header__name_site">
							<div class="name_site">narada</div>
							<div class="description_site">благодійний фонд</div>
						</div>
					</div>
		
				
					<?php wp_nav_menu(
						array(
							'theme_location' => 'frontpage_menu',
							'container' => 'nav',
							'container_class' => "header__menu",
						)
					); 
					?> 
				
				<div class="header__lang">
					<img src=<?php echo get_template_directory_uri() . "/assets/img/icons/ua.svg" ?> alt="">
					<img src=<?php echo get_template_directory_uri() . "/assets/img/icons/en.svg" ?> alt="">
				</div>
			</div>
		</header>