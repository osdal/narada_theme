<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="format-detection" content="telephone=no">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="wrapper">
		<header class="header">
			<div class="header__page brown">
				<div class="header__page-container">
					<div class="header__page-logo">
						<a href="<?php home_url();  ?>">
							<picture>
								<source srcset="<?php echo get_template_directory_uri() ?>'/assets/img/Logo.webp'" type="image/webp">
								<img src="<?php echo get_template_directory_uri() ?>'/assets/img/Logo.webp'" alt="logo">
							</picture>
						</a>
					</div>
					<?php wp_nav_menu(
							array(
								'theme_location' => 'page_menu',
								'container' => 'nav',
								'container_class' => "header__page-menu",
							)
					); 
					?> 
					<ul class="header__page-lang-switch">
						<li>
							<a href="">UA</a>
						</li>
						<li>
							<a href="">EN</a>
						</li>
						<li>
							<a href="">RU</a>
						</li>
						<li></li>
						<li></li>
					</ul>
			</div>
		</header>
