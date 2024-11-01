<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

udinra_uninstall_autogal_plugin();

function udinra_uninstall_autogal_plugin () {
	udinra_delete_autogal_options();
}

function udinra_delete_autogal_options () {
	udinra_auto_gal_uninstall();
}

?>