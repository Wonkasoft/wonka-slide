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
		'slide_count' => '3',
		'container_class' => 'wonka-slider-container',
		'item_class' => 'wonka-slider-item',
		'img_class' => 'wonka-slider-img',
	), $atts);

		$posts_array = get_posts();
		
		ob_start();
		?>
		<div class="<?php echo $atts['container_class']; ?>">
			<div class="list-wrap">
				<ul class="slide-list">
					<?php	foreach ( $posts_array as $current ) : ?>
						<li class="slide-item">
							<?php echo get_the_post_thumbnail( $current->ID ); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

		<?php
		$output .= ob_get_clean();

		return $output;

}
add_shortcode( 'wonka-slider', 'wonka_slide_shortcode', 30, 1);