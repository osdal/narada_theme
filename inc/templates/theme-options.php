<?php
	echo '<div class="wrap">
			<h1>' . get_admin_page_title() . '</h1>
			<form method="post" action="options.php">';
 
				settings_fields( $this->option_group );
				do_settings_sections( $this->page_slug );
				submit_button(); 

	echo '</form></div>';
?>