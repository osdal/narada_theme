<div class="wrap narada-options">
	<h1>
		<?php echo __( 'Админ страница', 'narada' ) ?>
	</h1>

	<?php settings_errors( ); ?>

	<form action="options.php" method="post">
		<?php settings_fields( option_group:'narada_general_group' );  ?>

		<?php  do_settings_sections( page:'manage_options' ); ?>

		<?php  submit_button( ); ?>


	</form>

</div>