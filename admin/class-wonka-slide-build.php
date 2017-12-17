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
		'id' => 'wonka-slider-main',
		'slide_indicators' => true,
		'ref_wrap_class' => 'wonka-slide-ref-wrap',
		'ref_list_class' => 'wonka-slide-ref-list',
		'ref_item_class' => 'wonka-slide-ref-item',
		'slide_count' => '3',
		'container_class' => 'wonka-slider-container',
		'list_class' => 'wonka-slide-list',
		'item_class' => 'wonka-slider-item',
		'img_class' => 'wonka-slide-img',
	), $atts);

	strtolower( $atts['slide_indicators'] );
	$atts['slide_indicators'] = ( $atts['slide_indicators'] === 'false' ) ? false: true; 
	$img_args = array(
		'class' => $atts['img_class'],
	);
		
		$posts_array = get_posts();
		$output .= '<div id="' . $atts['id'] . '" class="' . $atts['container_class'] . '">';
		if ( (bool)$atts['slide_indicators'] ) :
			$output .= '<div class="' . $atts['ref_wrap_class'] . '">';
			$output .= '<ul class="' . $atts['ref_list_class'] . '">';
			$i = 0;
			foreach ( $posts_array as $current ) :
				$i++;
				$active = ( $i == 1 ) ? ' active-ref': '';
				$output .= '<li id="slide-indicator-' . $i . '" class="' . $atts['ref_item_class'] . $active . '">';
				$output .= '<div class="background-img" style="background: url(' . get_the_post_thumbnail_url( $current->ID ) . '); background-size: cover; background-position: top center;"></div>';
				$output .= '</li>';
			if ( $atts['slide_count'] == $i ) {
				break;
			} 
			endforeach;
			$output .= '</ul></div>';
		endif;
		$output .= '<div class="list-wrap">';
		$output .= '<ul class="' . $atts['list_class'] . '">';
		$i = 0;
		foreach ( $posts_array as $current ) :
			$i++;
			$active = ( $i == 1 ) ? ' active': '';
			$output .= '<li class="' . $atts['item_class'] . $active . '">';
			$output .= get_the_post_thumbnail( $current->ID, '', $img_args );
			$output .= '</li>'; 
		if ( $atts['slide_count'] == $i ) {
			break;
		} 
		endforeach;
		$output .= '</ul></div>';
		$output .= '<a role="button" data-direction="prev" class="slide-control slide-control-left"></a>';
		$output .= '<a role="button" data-direction="next" class="slide-control slide-control-right"></a>';
		$output .= '</div>';
		ob_start();

		$output .= ob_get_clean();

		return $output;

}
add_shortcode( 'wonka-slider', 'wonka_slide_shortcode', 30, 1);