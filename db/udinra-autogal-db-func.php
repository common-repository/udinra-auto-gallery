<?php

function udinra_autogal_slideshow_images($udinra_autogal_source,$udinra_autogal_caption,&$udinra_autogal_images_html) {
											 
	$udinra_autogal_images_html = '';
	$udinra_autogal_header_html = '<div class="w3-display-container UdinraAutoGalContainer w3-text-blue">';
	$udinra_auto_gal_dir        = get_option('udinra_auto_gal_dir');
	$udinra_auto_gal_root       = get_option('udinra_auto_gal_root');
	$udinra_autogal_counter     = 1;
	if ($udinra_auto_gal_root == '' || ctype_space($udinra_auto_gal_root)){
		$udinra_auto_gal_root = '/';
	}
	else {
		$udinra_auto_gal_root = '/' . $udinra_auto_gal_root . '/' ;
	}
	if ($udinra_auto_gal_dir == '' || ctype_space($udinra_auto_gal_dir)){
		$udinra_auto_gal_source     = $udinra_autogal_source . '/';
	}
	else {
		$udinra_auto_gal_source     = $udinra_auto_gal_dir . '/' . $udinra_autogal_source . '/';
	}

	$udinra_autogal_images      = glob($udinra_auto_gal_source."*.{jpg,png,JPG,PNG}",GLOB_BRACE);
	$udinra_replace_chars    = array("-", "_");
	$udinra_auto_gal_source     = $udinra_autogal_source;
	$udinra_auto_gal_source = str_replace($udinra_replace_chars, " " ,$udinra_auto_gal_source);
	
	foreach($udinra_autogal_images as $udinra_autogal_image) {
		$udinra_autogal_counter = $udinra_autogal_counter + 1;
		
		switch ($udinra_autogal_caption) {
			case 'foldername':
				$udinra_autogal_images_html .= $udinra_autogal_header_html . '<img class="UdinraAutoGalImage' . '" src="'. 
												esc_url($udinra_auto_gal_root . $udinra_autogal_image) . '" style="width:100%" >' .
											   '<div class="UdinraAutoGalMiddle"><div class="UdinraAutoGalText">' . 
											   esc_html($udinra_auto_gal_source) . '</div>' . '</div>' . '</div>';
				break;
			case 'filename':
				$udinra_autogal_images_html .= $udinra_autogal_header_html . '<img class="UdinraAutoGalImage' . '" src="'. 
												esc_url($udinra_auto_gal_root . $udinra_autogal_image) . '" style="width:100%" >' .
											   '<div class="UdinraAutoGalMiddle"><div class="UdinraAutoGalText">' . 
											   esc_html(udinra_autogal_filename($udinra_autogal_image)) . '</div>' . '</div>' . '</div>';

				break;
			default:
				$udinra_autogal_images_html .= '<img class="UdinraAutoGalContainer"' . '" src="'. esc_url($udinra_auto_gal_root . 
												$udinra_autogal_image) . '" style="width:100%" >';
				break;
		}
	}
}

function udinra_autogal_filmstrip_images($udinra_autogal_source,$udinra_autogal_caption,
										&$udinra_autogal_images_html,&$udinra_autogal_dots_html) {
	$udinra_autogal_images_html = '';
	$udinra_autogal_dots_html   = '';
	$udinra_autogal_header_html = '<div class="w3-display-container UdinraAutoGalContainer w3-text-blue">';
	$udinra_auto_gal_dir        = get_option('udinra_auto_gal_dir');
	$udinra_auto_gal_root       = get_option('udinra_auto_gal_root');
	$udinra_autogal_counter     = 1;
	if ($udinra_auto_gal_root == '' || ctype_space($udinra_auto_gal_root)){
		$udinra_auto_gal_root = '/';
	}
	else {
		$udinra_auto_gal_root = '/' . $udinra_auto_gal_root . '/' ;
	}
	if ($udinra_auto_gal_dir == '' || ctype_space($udinra_auto_gal_dir)){
		$udinra_auto_gal_source     = $udinra_autogal_source . '/';
	}
	else {
		$udinra_auto_gal_source     = $udinra_auto_gal_dir . '/' . $udinra_autogal_source . '/';
	}
	
	$udinra_autogal_images      = glob($udinra_auto_gal_source."*.{jpg,png,JPG,PNG}",GLOB_BRACE);
	$udinra_replace_chars    = array("-", "_");
	$udinra_auto_gal_source     = $udinra_autogal_source;
	$udinra_auto_gal_source = str_replace($udinra_replace_chars, " " ,$udinra_auto_gal_source);
	
	foreach($udinra_autogal_images as $udinra_autogal_image) {
		
		switch ($udinra_autogal_caption) {
			case 'foldername':
				$udinra_autogal_images_html .= $udinra_autogal_header_html . '<img class="UdinraAutoGalImage' . '" src="'. esc_url($udinra_auto_gal_root . 
											   $udinra_autogal_image) . '" style="width:100%" >' .
											   '<div class="UdinraAutoGalMiddle"><div class="UdinraAutoGalText">' . 
											   esc_html($udinra_auto_gal_source) . '</div>' . '</div>' . '</div>';
				break;
			case 'filename':
				$udinra_autogal_images_html .= $udinra_autogal_header_html . '<img class="UdinraAutoGalImage' . '" src="'. esc_url($udinra_auto_gal_root . 
											   $udinra_autogal_image) . '" style="width:100%" >' .
											   '<div class="UdinraAutoGalMiddle"><div class="UdinraAutoGalText">' . 
											   esc_html(udinra_autogal_filename($udinra_autogal_image)) . '</div>' . '</div>' . '</div>';

				break;
			default:
				$udinra_autogal_images_html .= '<img class="UdinraAutoGalContainer"' . 
											   '" src="'. esc_url($udinra_auto_gal_root . $udinra_autogal_image) . '" style="width:100%" >';
				break;
		}
		$udinra_autogal_dots_html   .= '<img class="UdinraAutoGalDots w3-opacity w3-hover-opacity-off"  src="'. esc_url($udinra_auto_gal_root . 
									   $udinra_autogal_image) . '" onclick="UdinraSlideManCur(' . $udinra_autogal_counter . ')"  style="width:25%" />';
		$udinra_autogal_counter = $udinra_autogal_counter + 1;

	}
}

function udinra_autogal_filename($udinra_autogal_image){
	$udinra_autogal_pos1 = strrpos($udinra_autogal_image,'/');
	$udinra_autogal_pos2 = strrpos($udinra_autogal_image,'.');
	$udinra_autogal_filename = substr($udinra_autogal_image , $udinra_autogal_pos1 + 1 , $udinra_autogal_pos2 - $udinra_autogal_pos1 - 1);
	$udinra_replace_chars    = array("-", "_");
	$udinra_autogal_filename = str_replace($udinra_replace_chars, " " ,$udinra_autogal_filename);
	return $udinra_autogal_filename;
}

?>