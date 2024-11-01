<?php


function udinra_autogal_shortcode( $udinra_autogal_atts ) {

    $udinra_autogal_parameters = shortcode_atts( array(
									'type' => 'slideshow', 
									'source' => 'images',
									'captiontext' => 'false'
									), $udinra_autogal_atts );

	$udinra_auto_gal_html = '';
	
	switch ($udinra_autogal_parameters["type"]) {
		case 'filmstrip':
			$udinra_auto_gal_html = udinra_autogal_filmstrip($udinra_autogal_parameters["source"],
															 $udinra_autogal_parameters["captiontext"],
															 $udinra_autogal_parameters["animation"],
															 $udinra_autogal_parameters["effect"]);
			break;
		case 'slideshow':
			$udinra_auto_gal_html = udinra_autogal_slideshow($udinra_autogal_parameters["source"],
															 $udinra_autogal_parameters["captiontext"],
															 $udinra_autogal_parameters["animation"],
															 $udinra_autogal_parameters["effect"]);
			break;
		default:
			break;
	}

	udinra_autogal_script($udinra_autogal_parameters["type"]);
	udinra_autogal_css($udinra_autogal_parameters["type"]);
	
	return $udinra_auto_gal_html;
	
}

function udinra_autogal_script($udinra_autogal_type) {
	switch ($udinra_autogal_type) {
		case 'filmstrip':
			wp_enqueue_script( 'udinra-autogal-js', plugins_url( 'js/udinra_autogal_filmstrip.js',dirname( __FILE__ )),NULL,NULL, false );
			break;
		case 'slideshow':
			wp_enqueue_script( 'udinra-autogal-js', plugins_url( 'js/udinra_autogal_slideshow.js',dirname( __FILE__ )),NULL,NULL, false );
			break;
		default:
			break;
	}
}

function udinra_autogal_css($udinra_autogal_type) {
	wp_enqueue_style( 'udinra-autogal-css', plugins_url( 'css/udstyle.css',dirname( __FILE__ )));
	switch ($udinra_autogal_type) {
		case 'filmstrip':
			wp_enqueue_style( 'udinra-autogal-filmstrip-css', plugins_url( 'css/UdinraAutoGalFilmStrip.css',dirname( __FILE__ )));					
			break;
		case 'slideshow':
			wp_enqueue_style( 'udinra-autogal-slideshow-css', plugins_url( 'css/UdinraAutoGalSlideShow.css',dirname( __FILE__ )));					
			break;
		default:
			break;
	}
}
	
add_shortcode( 'udinra_autogal', 'udinra_autogal_shortcode' );

?>