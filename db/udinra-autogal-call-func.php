<?php

function udinra_auto_gal_uninstall(){
	delete_option('udinra_auto_gal_root');
	delete_option('udinra_auto_gal_dir');
}

function udinra_autogal_slideshow($udinra_autogal_source,$udinra_autogal_caption){
	$udinra_autogal_html           = '';
	$udinra_autogal_images_html    = '';
	$udinra_autogal_html_container = '<div class="w3-content w3-display-container" style="width:100%">';
	
	udinra_autogal_slideshow_images($udinra_autogal_source,$udinra_autogal_caption,$udinra_autogal_images_html);
	
	
	$udinra_autogal_html =  $udinra_autogal_html_container . $udinra_autogal_images_html . '</div>' ;
	return $udinra_autogal_html;
}

function udinra_autogal_filmstrip($udinra_autogal_source,$udinra_autogal_caption){
	$udinra_autogal_html           = '';
	$udinra_autogal_images_html    = '';
	$udinra_autogal_dots_html      = '';
	$udinra_autogal_html_container = '<div class="w3-content" style="width:100%">';
	$udinra_autogal_nav_container  = '<div class="UdinraAutoGalMenu" style="width:100%">';

	udinra_autogal_filmstrip_images($udinra_autogal_source,$udinra_autogal_caption,$udinra_autogal_images_html,$udinra_autogal_dots_html);
	
	$udinra_autogal_html =  $udinra_autogal_html_container . $udinra_autogal_images_html . $udinra_autogal_nav_container .
							$udinra_autogal_dots_html . '</div>' . '</div>' ;
	return $udinra_autogal_html;
}

?>