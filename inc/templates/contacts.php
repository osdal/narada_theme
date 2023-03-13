<div class="wrap">
	<h1>Контакты</h1>

	<form action="options.php" method="post">

		<?php settings_fields('contacts_group'); ?>

		<?php do_settings_sections('additional-options-social'); ?>

		<?php submit_button();  ?>

	</form>
</div>