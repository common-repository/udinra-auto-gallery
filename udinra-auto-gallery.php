<?php
/*
Plugin Name: Udinra Auto Gallery
Plugin URI: https://udinra.com/downloads/udinra-auto-gallery-pro
Description: Fastest way to create Gallery from your Images.
Author: Udinra
Version: 1.0.0
Author URI: https://udinra.com
*/

function Udinra_AutoGallery() {
	$udinra_auto_gal_response = '';
	include 'lib/udinra_autogal_save.php';	
	include 'lib/udinra_autogal_html.php';
}

function udinra_auto_gal_admin() {
	if (function_exists('add_options_page')) {
		add_options_page('Udinra Auto Gallery', 'Udinra Auto Gallery', 'manage_options', basename(__FILE__), 'Udinra_AutoGallery');
	}
}

function udinra_autogal_admin_notice() {
	global $current_user ;
	$user_id = $current_user->ID;
	if ( ! get_user_meta($user_id, 'udinra_autogal_admin_notice') ) {
		echo '<div class="notice notice-info"><p>'; 
		printf(__('Get Lightbox, Animation and Effects with Pro version <a href="https://udinra.com/downloads/udinra-auto-gallery-pro">Know More</a> | <a href="%1$s">Hide Notice</a>'), '?udinra_autogal_admin_ignore=0');
		echo "</p></div>";
	}
}

function udinra_autogal_admin_ignore() {
	global $current_user;
	$user_id = $current_user->ID;
	if ( isset($_GET['udinra_autogal_admin_ignore']) && '0' == $_GET['udinra_autogal_admin_ignore'] ) {
		add_user_meta($user_id, 'udinra_autogal_admin_notice', 'true', true);
	}
}

function udinra_autogal_update() {
	$udinra_autogal_cap = apply_filters( 'udinra_autogal_button_cap', 'activate_plugins' );
	if ( current_user_can( $udinra_autogal_cap ) ) {
		udinra_autogal_button();
	}
}
 
function udinra_autogal_deact() {
	remove_action('admin_menu','udinra_auto_gal_admin');	
	remove_action('admin_notices', 'udinra_autogal_admin_notice');
	remove_action('admin_init', 'udinra_autogal_admin_ignore');
	remove_action( 'init', 'udinra_autogal_update' );
}

function udinra_autogal_admin_style($hook) {
	if($hook == 'settings_page_udinra-auto-gallery') {
		wp_enqueue_style( 'udinra_auto_gal_admin_style', plugins_url('css/udstyle.css', __FILE__) );	
    }
}

function udinra_autogal_settings_plugin_link( $links, $file ) 
{
    if ( $file == plugin_basename(dirname(__FILE__) . '/udinra-auto-gallery.php') ) 
    {
        $in = '<a href="options-general.php?page=udinra-auto-gallery">' . __('Settings','udautogal') . '</a>';
        array_unshift($links, $in);
   }
    return $links;
}

include 'init/udinra-init-autogal.php';
include 'lib/udinra-autogal-visual-editor.php';
include 'db/udinra-autogal-call-func.php';
include 'db/udinra-autogal-db-func.php';

register_deactivation_hook(__FILE__, 'udinra_autogal_deact');

add_action('admin_menu','udinra_auto_gal_admin');	
add_action('admin_notices', 'udinra_autogal_admin_notice');
add_action('admin_init', 'udinra_autogal_admin_ignore');
add_action( 'init', 'udinra_autogal_update' );

add_action( 'admin_enqueue_scripts', 'udinra_autogal_admin_style' );
add_filter( 'plugin_action_links', 'udinra_autogal_settings_plugin_link', 10, 2 );

?>
