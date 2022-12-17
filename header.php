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
			<div class="header__container">
				<div class="site-name-block">
					<h1 class="site-name-block__site-name">
						<a class="site-name-block__site-name" href="<?php echo home_url('/') ?>"><?php bloginfo(show: 'name')  ?></a>	
					</h1>
					<h2 class="site-name-block__site-description">
						благодійний фонд
					</h2>
				</div>
			</div>
		</header>
