<?php
function udinra_autogal_button() {
		add_filter( 'mce_external_plugins', 'udinra_auto_gal_plugin' );
		add_filter( 'mce_buttons', 'udinra_autogal_register_button' );
}
function udinra_auto_gal_plugin( $plugin_array ) {
	$plugin_array['udinra_autogal_subscribe'] = plugins_url( 'js/udinra_autogal_button.js',dirname( __FILE__ ));
	return $plugin_array;
}
function udinra_autogal_register_button( $buttons ) {
	array_push( $buttons, "udinra_autogal_subscribe" );
	return $buttons;
}
?>