<?php
/**
 * The core plugin class.
 *
 * This is used to build slider and shortcodes.
 *
 * @since      1.0.0
 * @package    Wonka_Slide
 * @subpackage wonka-slide/inc
 * @author     Wonkasoft <info@wonkasoft.com>
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function wonka_slide_shortcode( $atts ) {

	$output = '';
	$atts = shortcode_atts( array(
		'id' => '',
		'container_class' => 'wonka-slider-container',
		'img_class' => 'wonka-slider-class',
	), $atts);

	if ( have_posts() ) :
		ob_start();
		
		?>
		

		<?php
		$output .= ob_get_clean();

		return $output;

	endif;
}
add_shortcode( 'wonka-slider', 'wonka_slide_shortcode', 30, 1);