<?php
function add_additional_admin_page(){
	add_menu_page( 'Дополнительные настройки сайта', 
							'Дополнительные настройки', 
							'edit_others_posts', 
							'additional-options', 
							'create_additional_admin_page', 
							get_template_directory_uri() . '/assets/img/Logo_ico.png' );

	add_action('admin_enqueue_scripts', 'add_admin_style');
}


add_action( 'admin_menu', 'add_additional_admin_page', 85 );

function create_additional_admin_page() {
	?>
	<div class="wrap">
		<h1>Дополнительные настройки сайта</h1>
	</div>



	<?php
}

function add_admin_style(){
	wp_enqueue_style('admin-main-style', get_template_directory_uri() . '/assets/css/admin-main.css',
);						
}

