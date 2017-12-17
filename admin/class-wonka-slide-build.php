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
		'slide_ref' => true,
		'ref_wrap_class' => 'wonka-slide-ref-wrap',
		'ref_list_class' => 'wonka-slide-ref-list',
		'ref_item_class' => 'wonka-slide-ref-item',
		'slide_count' => '3',
		'container_class' => 'wonka-slider-container',
		'list_class' => 'wonka-slide-list',
		'item_class' => 'wonka-slider-item',
		'img_class' => 'wonka-slide-img',
	), $atts);

	$img_args = array(
		'class' => $atts['img_class'],
	);
		
		ob_start();
			$posts_array = get_posts();
		?>
		<div id="<?php echo $atts['id']; ?>" class="<?php echo $atts['container_class']; ?>">
			<?php if ($atts['slide_ref']) { ?>
				<div class="<?php echo $atts['ref_wrap_class']; ?>">
					<ul class="<?php echo $atts['ref_list_class']; ?>">
						<?php	
						$i = 0;
						foreach ( $posts_array as $current ) : 
							$i++;
							?>
							<li id="slide-indicator-<?php echo $i; ?>" class="<?php echo $atts['ref_item_class']; $active = ( $i == 1 ) ? ' active-ref': ''; echo $active; ?>">
								<div class="background-img" style="background: url(<?php echo get_the_post_thumbnail_url( $current->ID ); ?>); background-size: cover; background-position: top center">
								</div>
							</li>
						<?php 
						if ( $atts['slide_count'] == $i ) {
							break;
						} 
						endforeach; ?>
					</ul>
				</div>
			<?php } ?>
			<div class="list-wrap">
				<ul class="<?php echo $atts['list_class']; ?>">
					<?php	
					$i = 0;
					foreach ( $posts_array as $current ) : 
						$i++;
						?>
						<li class="<?php echo $atts['item_class']; $active = ( $i == 1 ) ? ' active': ''; echo $active; ?>">
							<?php echo get_the_post_thumbnail( $current->ID, '', $img_args ); ?>
						</li>
					<?php 
					if ( $atts['slide_count'] == $i ) {
						break;
					} 
					endforeach; ?>
				</ul>
			</div>
			<a role="button" data-direction="prev" class="slide-control slide-control-left"></a>
			<a role="button" data-direction="next" class="slide-control slide-control-right"></a>
		</div>

		<?php
		$output .= ob_get_clean();

		return $output;

}
add_shortcode( 'wonka-slider', 'wonka_slide_shortcode', 30, 1);