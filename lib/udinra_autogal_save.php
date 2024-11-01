<?php

if(isset($_POST['save_option'])){
	check_admin_referer('udinra-autogal-nonce');
	$udinra_autogal_cap = apply_filters( 'udinra_autogal_button_cap', 'activate_plugins' );
	if ( current_user_can( $udinra_autogal_cap ) ) {
		update_option('udinra_auto_gal_dir',sanitize_text_field($_POST['udinra_auto_gal_dir']));
		update_option('udinra_auto_gal_root',sanitize_text_field($_POST['udinra_auto_gal_root']));
		$udinra_auto_gal_response = "Options saved successfully";		
	}
}



?>