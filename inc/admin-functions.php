<?php
function add_additional_admin_page(){
	$hook_suffix = add_menu_page( 'Дополнительные настройки сайта', 
						'Дополнительные настройки', 
						'edit_others_posts', 
						'additional-options', 
						'create_additional_admin_page', 
						get_template_directory_uri() . '/assets/img/Logo_ico.png',
	);
	add_submenu_page( 'additional-options', 'Настройки платежных реквизитов', 'Платежные реквизиты', 'edit_others_posts', 'additional-options-banks', 'create_additional_admin_page_banks', );
	add_submenu_page( 'additional-options', 'Настройки контактов', 'Контакты', 'edit_others_posts', 'additional-options-social', 'create_additional_admin_page_social', 10);


	add_action("admin_print_scripts-{$hook_suffix}", "add_admin_style");//подключение файла стилей к конкретной странице
	// add_action('admin_enqueue_scripts', 'add_admin_style');подключение файла стилей ко всем страницам админки
}

add_action( 'admin_menu', 'add_additional_admin_page', 85 );

add_action('admin_init', 'custom_settings');

function custom_settings(){
	register_setting( 'contacts_group', 'instagram');

	add_settings_section( 'contacts_group_section', 'Мессенджеры', '', 'additional-options-social');
}


function create_additional_admin_page() {
	require get_template_directory() . '/inc/templates/aditional-options.php';
	
}

function create_additional_admin_page_social(){
	require get_template_directory() . '/inc/templates/social.php';
}

function create_additional_admin_page_banks(){
	require get_template_directory() . '/inc/templates/banks.php';
}

function add_admin_style(){
	wp_enqueue_style('admin-main-style', get_template_directory_uri() . '/assets/css/admin-main.css',
);						
}

