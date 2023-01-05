<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Narada
 */

get_header('post');
?>

<?php the_post(); ?>
	<div class="wrapper">
		<main class="page_my">
				<div class="container">
					<h1 class="page_my__titile">
						<?php the_title( ); ?>
					</h1>
					<div class="page_my__date-block">
						<div class="page_my__date">
							<?php echo get_the_date('d-m-Y' ); ?>
						</div>
						<div class="page_my__author">
							<span>Автор: </span><?php the_author(); ?>
						</div>
					</div>
						
					<div class="page_my__article">
						<div class="page_my__content">
							<div class="img-in-page">
									<?php the_post_thumbnail('full' ); ?>

									<div class="img-in-page-desc">
										<?php 
											// Это вывод атрибута alt
											// $id_thumb = get_post_thumbnail_id();
											// $image_alt = get_post_meta($id_thumb, '_wp_attachment_image_alt', true);
											// echo $image_alt;
			
											// Это вывод подписи картинки
											$thumb_img = get_post( get_post_thumbnail_id() ); 
											echo $thumb_img->post_excerpt; // та самая подпись
										?>
									</div>
							</div>
							
							<article>
								<?php the_content( ) ?>
							</article>
							</div>
							<section class="page_my__sidebar">
								<div class="page_my__sidebar-widget">
									<div class="page_my__sidebar-widget-title">
										<h2>
											<a href="#">Блог</a>
										</h2>
										<div class="page_my__sidebar-widget-title-entry">
											<h3>
												<a href="#">Заголовок статьи</a>
											</h3>
										</div>
										<div class="page_my__sidebar-widget-content-entry">
											Краткое описание статьи
											Велика частина його тексту складається з розділів 1.10.32-3 з Цицерона De finibus bonorum ін
											malorum ( на кордонах добра і зла ; finibus може alspo
										</div>
										<div class="page_my__sidebar-widget-title-entry">
											<h3>
												Заголовок статьи
											</h3>
										</div>
										<div class="page_my__sidebar-widget-content-entry">
											Краткое описание статьи
											Велика частина його тексту складається з розділів 1.10.32-3 з Цицерона De finibus bonorum ін
											malorum ( на кордонах добра і зла ; finibus може alspo
										</div>
									</div>
								</div>
								<div class="page_my__sidebar-widget">
									<div class="page_my__sidebar-widget-title">
										<h2>
											Контакти
										</h2>
										<div class="page_my__sidebar-social-icons-block">
											<li class="social-icons-block__item _icon-instagram-1">
												<a href="#" class=""></a>
											</li>
											<li class="social-icons-block__item _icon-whatsapp-1">
												<a href="#" class=""></a>
											</li>
											<li class="social-icons-block__item _icon-telegram-1">
												<a href="#" class=""></a>
											</li>
											<div class="social-icons-block__item _icon-envelope-regular">
												<a href="#" class=""></a>
											</div>
										</div>
										<div class="page_my__sidebar-widget-phone">
											Тел.: +38(050) 333-222-5
										</div>
										<div class="page_my__sidebar-widget-adress">
											<p>Адреса:</p>
											<p>49000, Україна, м. Дніпро, вул. Тітова</p>
										</div>
									</div>
								</div>
							</section>
						</div>
				</div>
		</main>
	</div>

<?php
get_sidebar();
get_footer();
