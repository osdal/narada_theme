<div class="wrap">
		<h1>Платежные реквизиты</h1>

		<form action="options.php" method="post">

		<?php settings_fields('payments_group'); ?>

		<?php do_settings_sections('additional-options-banks'); ?>

		<?php submit_button();  ?>

	</form>
</div>