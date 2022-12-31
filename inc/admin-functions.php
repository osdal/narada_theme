<?php

add_action( 'admin_menu', 'narada_add_admin_page');

function narada_add_admin_page() {
		$hook_suffix = add_menu_page( 
			__('NARADA Theme Options', 'narada'),  __('NARADATheme', 'narada'),
			capability: 'manage_options', 
			menu_slug:'narada-options',
			callback:'narada_create_page', 
			icon_url:get_template_directory_uri() . '/assets/img/heart_donate_icon_215087.png');

			add_action( "admin_print_scripts-{$hook_suffix}", 'narada_admin_scripts');
}

function narada_create_page(){
	require get_template_directory() . '/inc/templates/narada-options.php';
}

function narada_admin_scripts(){
	wp_enqueue_style( handle:'narada-main-style', src: get_template_directory_uri() . '/assets/css/admin-main.css');
	wp_enqueue_script(handle: 'narada-main-js', src: get_template_directory_uri() . '/assets/js/admin-main.js', deps: array('jquery'), ver: false, in_footer: true);
}	