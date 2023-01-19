<?php

class trueOptionsPage{
 
	public $page_slug;
	public $option_group;
 
	function __construct() {
		// это у нас используется много где, поэтому давайте вынесем как отдельное свойство
		$this->page_slug = 'true_slider';
		$this->option_group = 'true_slider_settings';
 
		add_action( 'admin_menu', array( $this, 'add' ), 85 );
		add_action( 'admin_init', array( $this, 'settings' ) );
		add_action( 'admin_notices', array( $this, 'notice' ) );
 
	}
 
	function add(){
 
		add_menu_page( 'Дополнительные настройки сайта', 
							'Дополнительные настройки', 
							'edit_others_posts', 
							$this->page_slug, 
							array( $this, 'display' ), 
							get_template_directory_uri() . '/assets/img/Logo_ico.png', 80 );
 
	}
 
	function display() {
 
		echo '<div class="wrap">
			<h1>' . get_admin_page_title() . '</h1>
			<form method="post" action="options.php">';
 
			settings_fields( $this->option_group );
			do_settings_sections( $this->page_slug );
			submit_button(); 
 
		echo '</form></div>';
 
	}
 
	function settings(){
 
		register_setting( $this->option_group, //где выводится опция
								'number_of_slider_slides', //название опции
								'sanitize_text_field' );
 
		add_settings_section( 'slider_settings_section_id', //Идентификатор секции, по которому нужно "цеплять" поля к секции. 
																			//Строка, которая будет использована для id атрибутов тегов.
									'Логины мессенджеров', //Заголовок секции
									'', //Коллбэк (функция), которая заполняет секцию описанием. Вызывается перед выводом полей.
									$this->page_slug );//Страница на которой выводить секцию.
 
		add_settings_field(
			'number_of_slider_slides',//Ярлык (slug) опции, используется как идентификатор поля. Используется в ID атрибуте тега.
			'Instagram',//Название поля
			array( $this, 'field' ),//Название функции обратного вызова. Функция должна заполнять поле нужным <input> тегом, который станет частью одной большой формы.
											// Атрибут nameдолжен быть равен параметру $option_name из register_setting().
											// Атрибут idобычно равен параметру $id.
											// Результат должен сразу выводиться на экран (echo).
			$this->page_slug,//Страница меню в которую будет добавлено поле. Указывать нужно ярлык (slug) страницы.
			'slider_settings_section_id',//Название секции настроек, в которую будет добавлено поле. По умолчанию default или может быть секцией добавленной функцией add_settings_section().
			
			array(	//Дополнительные параметры, которые нужно передать callback функции. 
						//Например, в паре key/value мы можем передать параметр $id, который затем использовать для атрибута id поля input, 
						//чтобы по нажатию на label в итоговом выводе, фокус курсора попадал в наше поле.
				'label_for' => 'number_of_slider_slides',
				'class' => 'misha-class',
				'name' => 'number_of_slider_slides',
			)
		);
 
	}
 
	function field( $args ){
		// получаем значение из базы данных
		$value = get_option( $args[ 'name' ] );
 
		printf(
			'<input  id="%s" name="%s" value="%s" />',
			esc_attr( $args[ 'name' ] ),
			esc_attr( $args[ 'name' ] ),
			sanitize_text_field( $value )
		);
 
	}
 
	function notice() {
 
		if(
			isset( $_GET[ 'page' ] )
			&& $this->page_slug == $_GET[ 'page' ]
			&& isset( $_GET[ 'settings-updated' ] )
			&& true == $_GET[ 'settings-updated' ]
		) {
			echo '<div class="notice notice-success is-dismissible"><p>Настройки сохранёны!</p></div>';
		}
 
	}
 
}
 
new trueOptionsPage();


?>