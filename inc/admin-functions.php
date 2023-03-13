<?php

add_action( 'admin_menu', 'add_additional_admin_page');

function add_additional_admin_page(){
	$hook_suffix = add_menu_page( 'Дополнительные настройки сайта', 
											'Дополнительные настройки', 
											'edit_others_posts', 
											'additional-options', 
											'create_additional_admin_page', 
											get_template_directory_uri() . '/assets/img/Logo_ico.png',
											);
	add_submenu_page( 'additional-options', 
							'Настройки платежных реквизитов', 
							'Платежные реквизиты', 
							'edit_others_posts', 
							'additional-options-banks', 
							'create_additional_admin_page_banks', 
							);
	add_submenu_page( 'additional-options', 
							'Настройки контактов', 
							'Контакты', 
							'edit_others_posts', 
							'additional-options-social', 
							'create_additional_admin_page_social'
							);


	add_action("admin_print_scripts-{$hook_suffix}", "add_admin_style");//подключение файла стилей к конкретной странице
	// add_action('admin_enqueue_scripts', 'add_admin_style');подключение файла стилей ко всем страницам админки
}


add_action('admin_init', 'custom_settings');

function custom_settings(){
	register_setting( 'contacts_group', 'messengers_instagram');
	register_setting( 'contacts_group', 'messengers_whatsapp');
	register_setting( 'contacts_group', 'messengers_viber');
	register_setting( 'contacts_group', 'messengers_telegram');
	register_setting( 'contacts_group', 'messengers_youtube');
	register_setting( 'contacts_group', 'messengers_facebook');

	register_setting('payments_group', 'payments_bankcard');
	register_setting('payments_group', 'payments_paypal');
	register_setting('payments_group', 'payments_bitcoin');

	add_settings_section( 'contacts_group_section', 'Мессенджеры','', 'additional-options-social');
	add_settings_section( 'social_section', 'Социальные сети','', 'additional-options-social');

	add_settings_section('bank_card', 'Банковские реквизиты' ,'', 'additional-options-banks');
	add_settings_section('electron_payment', 'Электронные платежные системы' ,'', 'additional-options-banks');
	add_settings_section('cripto_payment', 'Криптовалюта' ,'', 'additional-options-banks');

	add_settings_field( 'instagram', 
								'Instagram', 
								'messengers_instagram_field', 
								'additional-options-social', 
								'contacts_group_section', 
								array('label_for' => 'instagram')
								);
	add_settings_field( 'whatsapp', 'Whatsapp', 'messengers_whatsapp_field', 'additional-options-social', 'contacts_group_section', array('label_for' => 'whatsapp'));
	add_settings_field( 'viber', 'Viber', 'messengers_viber_field', 'additional-options-social', 'contacts_group_section', array('label_for' => 'viber'));
	add_settings_field( 'telegram', 'Telegram', 'messengers_telegram_field', 'additional-options-social', 'contacts_group_section', array('label_for' => 'telegram'));
	add_settings_field( 'youtube', 'Youtube', 'messengers_youtube_field', 'additional-options-social', 'social_section', array('label_for' => 'youtube'));
	add_settings_field( 'facebook', 'Facebook', 'messengers_facebook_field', 'additional-options-social', 'social_section', array('label_for' => 'facebook'));

	add_settings_field('bank_card', 'Номер банковской карты', 'bank_card_field', 'additional-options-banks', 'bank_card', array('label_for' => 'bank_card'));
	add_settings_field('paypal', 'Адрес Paypal', 'paypal_field', 'additional-options-banks', 'electron_payment', array('label_for' => 'paypal'));
	add_settings_field('bitcoin', 'Адрес BTC', 'bitcoin_field', 'additional-options-banks', 'cripto_payment', array('label_for' => 'bitcoin'));
}



function messengers_instagram_field(){
	$instagram = esc_attr(get_option( 'messengers_instagram'));

	echo '<input type="text" name="messengers_instagram" class="regular-text" id="instagram" value="'. $instagram .'">
			<p class=description>Введите свой логин Instagram без значка @</p>';
}

function messengers_whatsapp_field(){
	$whatsapp = esc_attr(get_option( 'messengers_whatsapp'));

	echo '<input type="number" name="messengers_whatsapp" class="regular-text" id="whatsapp" value="'. $whatsapp .'"> 
	<p class=description>Введите свой номер телефона Whatsapp</p>';
}

function messengers_viber_field(){
	$viber = esc_attr(get_option( 'messengers_viber'));

	echo '<input type="number" name="messengers_viber" class="regular-text" id="viber" value="'. $viber .'"> 
	<p class=description>Введите свой номер телефона Viber</p>';
}

function messengers_telegram_field(){
	$telegram = esc_attr(get_option( 'messengers_telegram'));

	echo '<input type="text" name="messengers_telegram" class="regular-text" id="telegram" value="'. $telegram .'"> 
	<p class=description>Введите своё имя в Telegram без значка @</p>';
}

function messengers_youtube_field(){
	$youtube = esc_attr(get_option( 'messengers_youtube'));

	echo '<input type="text" name="messengers_youtube" class="regular-text" id="youtube" value="'. $youtube .'"> 
	<p class=description>Введите адрес канала в Youtube без значка @</p>';
}
function messengers_facebook_field(){
	$facebook = esc_attr(get_option( 'messengers_facebook'));

	echo '<input type="text" name="messengers_facebook" class="regular-text" id="facebook" value="'. $facebook .'"> 
	<p class=description>Введите свой логин в Facebook</p>';
}

function bank_card_field(){
	$bcf = esc_attr(get_option( 'payments_bankcard'));

	echo '<input type="number" name="payments_bankcard" class="regular-text" id="payments_bankcard" value="'. $bcf .'"> 
	<p class=description>Введите номер банковской карты</p>';
}

function paypal_field(){
	$paypal = esc_attr(get_option( 'payments_paypal'));

	echo '<input type="email" name="payments_paypal" class="regular-text" id="paypal" value="'. $paypal .'"> 
	<p class=description>Введите адрес Paypal</p>';
}

function bitcoin_field(){
	$bitcoin = esc_attr(get_option( 'payments_bitcoin'));

	echo '<input type="text" name="payments_bitcoin" class="regular-text" id="bitcoin" value="'. $bitcoin .'"> 
	<p class=description>Введите адрес Bitcoin</p>';
}


function create_additional_admin_page() {
	require get_template_directory() . '/inc/templates/aditional-options.php';
	
}

function create_additional_admin_page_social(){
	require get_template_directory() . '/inc/templates/contacts.php';
}

function create_additional_admin_page_banks(){
	require get_template_directory() . '/inc/templates/banks.php';
}

function add_admin_style(){
	wp_enqueue_style('admin-main-style', get_template_directory_uri() . '/assets/css/admin-main.css',
);						
}

