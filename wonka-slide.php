<?php
/**
 *
 * @wordpress-plugin
 * Plugin Name:       Wonka Slide
 * Plugin URI:        https://wonkasoft.com/wonka-slide
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Wonkasoft
 * Author URI:        https://wonkasoft.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wonka-slide
 * Domain Path:       /languages
 *
 * @link              https://wonkasoft.com
 * @since             1.0.0
 * @package           Wonka_Slide
 *
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

register_activation_hook( __FILE__, 'wonka_slide_activator' );
function wonka_slide_activator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wonka-slide-activator.php';
	wonka_slide_activator::activate();
}

register_deactivation_hook( __FILE__, 'wonka_slide_deactivator' );
function wonka_slide_deactivator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wonka-slide-deactivator.php';
	wonka_slide_deactivator::deactivate();
}